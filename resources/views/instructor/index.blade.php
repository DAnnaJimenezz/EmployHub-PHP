@extends('layouts.app')
@section('content')


<div class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.instructor') }}" class="boton1">Crear Nuevo Instructor</a>
    <ul>
        @forelse ($instructores as $instructor)
        <table>
            <tr>
                <th>ID</th>
                <th>Número de Documento</th>
                <th>Tipo de Documento</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
            </tr>
            <tr>
                <td><a>{{ $instructor->id }}</a></td>
                <td><a>{{ $instructor->numero_documento }}</a></td>
                <td><a>{{ $instructor->tipo_documento}}</a></td>
                <td><a>{{ $instructor->nombre }}</a></td>
                <td><a>{{ $instructor->apellido }}</a></td>
                <td><a>{{ $instructor->correo_electronico }}</a></td>
            </tr>
        </table>
            <li>
                <a href="{{ route('show.instructor', $instructor->id) }}">{{ $instructor->id }}</a> |
                <a href="{{ route('edit.instructor', $instructor->id) }}" class="boton1">EDITAR</a> |
                <form method="POST" action="{{ route('destroy.instructor', ['instructor'=>$instructor->id]) }}"> 
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