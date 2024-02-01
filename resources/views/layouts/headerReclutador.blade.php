@extends('layouts.app')
@section('content')
    <ul class="menu-recruiter">
        <li class="contenedor-recruiter">
            <a href="#">Reclutador</a>
            <ul class="sub-Menu-recruiter">
                <li><a href="{{ route('create.empresa')}}">Crear Empresa</a></li>
                <li><a href="{{ route('create.ocupacion')}}">Crear Ocupacion</a></li>
                <li><a href="{{ route('create.cargo')}}">Crear Cargo</a></li>
                <li><a href="{{ route('create.ponderacion')}}">Crear Ponderacion></li>
                <li><a href="#">Registrar Manual de Funciones</a></li> 
                <li><a href="#">Registrar Requisicion de un cargo</a></li>
                <li><a href="#">Cargo Vacante</a></li>
            </ul>
        </li>
    </ul>
@endsection