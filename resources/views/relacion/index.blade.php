@extends('layouts.app')
@section('content')

<div class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.relacion') }}" class="boton1">Editar tu Relación</a>
    <ul>
        @forelse ($relaciones as $relacion)
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre de la Ocupación Relacionada</th>
            </tr>
            <tr>
                <td><a>{{ $relacion->id }}</a></td>
                <td><a>{{ $relacion->nombre_relacion_ocupacion }}</a></td>
            </tr>
        </table>
        <li>
            <a href="{{ route('show.relacion', $relacion->id) }}">{{ $relacion->id }}</a> |
            <a href="{{ route('edit.relacion', $relacion->id) }}" class="boton1">EDITAR</a> |
            <form method="POST" action="{{ route('destroy.relacion', ['relacion'=>$relacion->id]) }}"> 
                @csrf
                @method('DELETE')
                <input type="submit" value='DELETE' class="boton1">
            </form>
        </li>
        @empty
        <p>No hay datos.</p>
        @endforelse
    </ul>
</div>
@endsection