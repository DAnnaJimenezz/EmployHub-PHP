@extends('layouts.app')
@section('content')


<div  class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.ponderacion') }}" class="boton1">Crear Nueva Ponderación</a>
    <ul>
        @forelse ($ponderaciones as $ponderacion)
        <table>
            <tr>
                <th>ID</th>
                <th>Idiomas</th>
                <th>Educación</th>
                <th>Experiencia Laboral</th>
                <th>Habilidades Técnicas</th>
                <th>Proyecto Anterior</th>
                <th>Referencias</th>
                <th>Curso Adicional</th>
            </tr>
            <tr>
                <td><a>{{ $ponderacion->id }}</a></td>
                <td><a>{{ $ponderacion->idiomas }}</a></td>
                <td><a>{{ $ponderacion->educacion}}</a></td>
                <td><a>{{ $ponderacion->experiencia_laboral }}</a></td>
                <td><a>{{ $ponderacion->habilidades_tecnicas }}</a></td>
                <td><a>{{ $ponderacion->proyecto_anterior}}</a></td>
                <td><a>{{ $ponderacion->referencias}}</a></td>
                <td><a>{{ $ponderacion->curso_adicional }}</a></td>
            </tr>
        </table>
            <li>
                <a href="{{ route('show.ponderacion', $ponderacion->id) }}">{{ $ponderacion->id }}</a> |
                <a href="{{ route('edit.ponderacion', $ponderacion->id) }}" class="boton1">EDITAR</a> |
                <form method="POST" action="{{ route('destroy.ponderacion', ['ponderacion'=>$ponderacion->id]) }}"> 
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