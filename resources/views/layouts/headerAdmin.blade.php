@extends('layouts.app')
@section('content')
    <ul class="menu-admin">
        <li class="contenedor-admin">
            <a href="#">Admin</a>
            <ul class="sub-Menu-admin">
                <li><a href="{{ route('create.instructor') }}">Registrar Instructores</a></li>
                <li><a href="">Asignar Roles</a></li>
                <li><a href="#">Cambiar Roles</a></li>
                <li><a href="{{ route('instructor') }}">Eliminar Rol Instructor</a></li>
            </ul>
        </li>    
    </ul>
@endsection