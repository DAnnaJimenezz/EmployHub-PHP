@extends('layouts.app')
@section('content')

<div class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('administrador.create') }}" class="boton1">Crear Nuevo Administrador</a>
    <ul>
        @forelse ($administradores as $administrador)
        <table>
            <tr>
                <th>ID</th>
                <th>Número de Documento</th>
                <th>Tipo de Documento</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>ID del Tipo de Usuario</th>
            </tr>
            <tr>
                <td><a>{{ $administrador->id }}</a></td>
                <td><a>{{ $administrador->numero_documento }}</a></td>
                <td><a>{{ $administrador->tipo_documento}}</a></td>
                <td><a>{{ $administrador->nombre }}</a></td>
                <td><a>{{ $administrador->apellido }}</a></td>
                <td><a>{{ $administrador->correo_electronico }}</a></td>
                <td><a>{{ $administrador->id_tipo_usuario }}</a></td>
            </tr>
        </table>
        <li>
            <a href="{{ route('administrador.show', $administrador->id) }}">{{ $administrador->id }}</a> |
            <a href="{{ route('administrador.edit', $administrador->id) }}" class="boton1">EDITAR</a> |
            <form method="POST" action="{{ route('administrador.destroy', ['administrador'=>$administrador->id]) }}"> 
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