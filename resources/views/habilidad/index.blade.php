@extends('layouts.app')
@section('content')


<div  class="container1">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <a href="{{ route('create.habilidad') }}" class="boton1">Create New Ability</a>
    <ul>
        @forelse ($habilidades as $habilidad)
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre Habilidad</th>
                <th>Descripcion Habilidad</th>
                <th>Id Ocupaciones</th>
                <th>Nombre Ocupacion</th>
            </tr>
            <tr>
                <td><a>{{ $habilidad->id }}</a></td>
                <td><a>{{ $habilidad->nombre_habilidad }}</a></td>
                <td><a>{{ $habilidad->descripcion_habilidad}}</a></td>
                <td><a>{{ $habilidad->id_ocupaciones }}</a></td>
                <td><a>{{ $habilidad->nombre_ocupacion }}</a></td>
            </tr>
        </table>
            <li>
                <a href="{{ route('show.habilidad', $habilidad->id) }}">{{ $habilidad->id }}</a> |
                <a href="{{ route('show.habilidad', $habilidad->id) }}" class="boton1">EDIT</a> |
                <form method="POST" action="{{ route('destroy.habilidad', ['habilidad'=>$habilidad->id]) }}"> 
                    @csrf
                    @method('DELETE')
                    <input type="submit" value='DELETE' class="boton1">
                </form>
            </li>
        @empty
            <p>No data.</p>
        @endforelse
    </ul>
</div>
@endsection