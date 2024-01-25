@extends('layouts.app')
@section('content')

<div class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.conocimiento') }}" class="boton1">Crear Nuevo Conocimiento</a>
    <ul>
        @forelse ($conocimientos as $conocimiento)
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre de la Habilidad</th>
                <th>Descripción de la Habilidad</th>
                <th>ID de Ocupación</th>
                <th>Nombre de la Ocupación</th>
            </tr>
            <tr>
                <td><a>{{ $conocimiento->id }}</a></td>
                <td><a>{{ $conocimiento->nombre_conocimiento }}</a></td>
                <td><a>{{ $conocimiento->descripcion_conocimiento}}</a></td>
                <td><a>{{ $conocimiento->id_ocupaciones }}</a></td>
                <td><a>{{ $conocimiento->nombre_ocupacion }}</a></td>
            </tr>
        </table>
        <li>
            <a href="{{ route('show.conocimiento', $conocimiento->id) }}">{{ $conocimiento->id }}</a> |
            <a href="{{ route('edit.conocimiento', $conocimiento->id) }}" class="boton1">EDITAR</a> |
            <form method="POST" action="{{ route('destroy.conocimiento', ['conocimiento'=>$conocimiento->id]) }}"> 
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