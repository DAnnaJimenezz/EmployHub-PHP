@extends('layouts.app')
@section('content')

<div class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.denominacion') }}" class="boton1">Crear Nueva Denominación</a>
    <ul class="mi-lista">
        @forelse ($denominaciones as $denominacion)
        <table>
            <tr>
                <th>ID</th>
                <th>Descripción de la Denominación</th>
                <th>ID de Ocupación</th>
                <th>Nombre de la Ocupación</th>
            </tr>
            <tr>
                <td><a>{{ $denominacion->id }}</a></td>
                <td><a>{{ $denominacion->descripcion_denominacion}}</a></td>
                <td><a>{{ $denominacion->id_ocupaciones }}</a></td>
                <td><a>{{ $denominacion->nombre_ocupacion }}</a></td>
            </tr>
        </table>
        <li class="mi-elemento">
            <a href="{{ route('show.denominacion', $denominacion->id) }}">{{ $denominacion->id }}</a> |
            <a href="{{ route('edit.denominacion', $denominacion->id) }}" class="boton1">EDITAR</a> |
            <form method="POST" action="{{ route('destroy.denominacion', ['denominacion'=>$denominacion->id]) }}"> 
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