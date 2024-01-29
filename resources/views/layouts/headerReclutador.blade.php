@extends('layouts.app')
@section('content')
    <ul class="menu-recruiter">
        <li class="contenedor-recruiter">
            <a href="#">Recruiter</a>
            <ul class="sub-Menu-recruiter">
                <li><a href="{{ route('create.company')}}">Crear Empresa</a></li>
                <li><a href="{{ route('create.occupation')}}">Crear Ocupacion</a></li>
                <li><a href="{{ route('create.post')}}">Crear Cargo</a></li>
                <li><a href="{{ route('create.weighing')}}">Crear Ponderacion></li>
                <li><a href="#">Registrar Manual de Funciones</a></li> 
                <li><a href="#">Registrar Requisicion de un cargo</a></li>
                <li><a href="#">Cargo Vacante</a></li>
            </ul>
        </li>
    </ul>
@endsection