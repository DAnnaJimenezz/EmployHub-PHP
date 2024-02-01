@extends('layouts.app')
@section('content')

<div class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.cargo') }}" class="boton1">Crear Nueva Publicación</a>
    <ul>
        @forelse ($cargos as $cargo)
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre del Cargo</th>
                <th>Dirección</th>
                <th>Teléfono</th>
            </tr>
            <tr>
                <td><a>{{ $cargo->id }}</a></td>
                <td><a>{{ $cargo->nombre_cargo }}</a></td>
                <td><a>{{ $cargo->direccion}}</a></td>
                <td><a>{{ $cargo->telefono }}</a></td>
            </tr>
        </table>
        <li>
            <a href="{{ route('show.cargo', $cargo->id) }}">{{ $cargo->id }}</a> |
            <a href="{{ route('edit.cargo', $cargo->id) }}" class="boton1">EDITAR</a> |
            <form method="POST" action="{{ route('destroy.cargo', ['cargo'=>$cargo->id]) }}"> 
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
