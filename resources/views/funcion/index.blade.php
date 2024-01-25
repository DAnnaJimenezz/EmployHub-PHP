@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Funciones/indexFuncion.css') }}">
<a href="{{ route('create.funcion') }}" class="boton1">Crear Nueva Función</a>
<div class="container1">
    <ul>
        @forelse ($funciones as $funcion)
            <table>
                <tr>
                    <th>ID</th>
                    <th>Descripción de la Función</th>
                    <th>ID de la Ocupación</th>
                    <th>Nombre de la Ocupación</th>
                </tr>
                <tr>
                    <td><a>{{ $funcion->id }}</a></td>
                    <td><a>{{ $funcion->descripcion_funcion }}</a></td>
                    <td><a>{{ $funcion->id_ocupaciones }}</a></td>
                    <td><a>{{ $funcion->nombre_ocupacion }}</a></td>
                </tr>
            </table>
            <li>
                <a href="{{ route('show.funcion', $funcion->id) }}">{{ $funcion->id }}</a> |
                <a href="{{ route('edit.funcion', $funcion->id) }}" class="boton1">EDITAR</a> |
                <form method="POST" action="{{ route('destroy.funcion', ['funcion'=>$funcion->id]) }}"> 
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
