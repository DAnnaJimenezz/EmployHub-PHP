@extends('layouts.app')
@section('content')


<div class="contenedor1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.reclutador') }}" class="boton1">Crear Nuevo Reclutador</a>
    <ul>
        @forelse ($reclutadores as $reclutador)
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
                <td><a>{{ $reclutador->id }}</a></td>
                <td><a>{{ $reclutador->numero_documento }}</a></td>
                <td><a>{{ $reclutador->tipo_documento}}</a></td>
                <td><a>{{ $reclutador->nombre }}</a></td>
                <td><a>{{ $reclutador->telefono }}</a></td>
                <td><a>{{ $reclutador->correo_electronico }}</a></td>
            </tr>
        </table>
            <li>
                <a href="{{ route('show.reclutador', $reclutador->id) }}">{{ $reclutador->id }}</a> |
                <a href="{{ route('edit.reclutador', $reclutador->id) }}" class="boton1">EDITAR</a> |
                <form method="POST" action="{{ route('destroy.reclutador', ['reclutador'=>$reclutador->id]) }}"> 
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