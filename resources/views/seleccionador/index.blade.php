@extends('layouts.app')
@section('content')


<div  class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.seleccionador') }}" class="boton1">Crear Nuevo Selector</a>
    <ul>
        @forelse ($seleccionadores as $seleccionador)
        <table>
            <tr>
                <th>ID</th>
                <th>Número de Documento</th>
                <th>Tipo de Documento</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Correo Electrónico</th>
            </tr>
            <tr>
                <td><a>{{ $seleccionador->id }}</a></td>
                <td><a>{{ $seleccionador->numero_documento_selector }}</a></td>
                <td><a>{{ $seleccionador->tipo_documento_selector }}</a></td>
                <td><a>{{ $seleccionador->nombre_selector }}</a></td>
                <td><a>{{ $seleccionador->telefono_selector }}</a></td>
                <td><a>{{ $seleccionador->correo_electronico_selector }}</a></td>
            </tr>
        </table>
            <li>
                <a href="{{ route('show.seleccionador', $seleccionador->id) }}">{{ $seleccionador->id }}</a> |
                <a href="{{ route('edit.seleccionador', $seleccionador->id) }}" class="boton1">EDITAR</a> |
                <form method="POST" action="{{ route('destroy.seleccionador', ['seleccionador'=>$seleccionador->id]) }}"> 
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