@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/index.css') }}">
<a href="{{ route('create.ocupacion') }}" class="boton1">Crear Nueva Ocupación</a>
<ul class="mi-lista">
    @forelse ($ocupaciones as $ocupacion)
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre de la Ocupación</th>
            <th>Descripción de la Ocupación</th>
            <th>ID del Puesto</th>
        </tr>
        <tr>
            <td><a>{{ $ocupacion->id }}</a></td>
            <td><a>{{ $ocupacion->nombre_ocupacion }}</a></td>
            <td><a>{{ $ocupacion->descripcion_ocupacion }}</a></td>
            <td><a>{{ $ocupacion->id_cargo }}</a></td>
        </tr>
    </table>
        <li class="mi-elemento">
            <a href="{{ route('show.ocupacion', $ocupacion->id) }}">{{ $ocupacion->id }}</a> |
            <a href="{{ route('edit.ocupacion', $ocupacion->id) }}" class="boton1">EDITAR</a> |
            <form method="POST" action="{{ route('destroy.ocupacion', ['ocupacion'=>$ocupacion->id]) }}"> 
                @csrf
                @method('DELETE')
                <input type="submit" value='DELETE' class="boton1">
            </form>
        </li>
    @empty
        <p>No hay datos.</p>
    @endforelse
</ul>
@endsection