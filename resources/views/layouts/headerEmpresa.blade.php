@extends('layouts.app')
@section('content')
    <ul class="menu-company">
        <li class="contenedor-company">
            <a href="#">Empresa</a>
            <ul class="sub-Menu-company">
                <li><a href="{{ route('create.empresa')}}">Crear Empresa</a></li>
                <li><a href="{{ route('create.oferta')}}">Crear Oferta</a></li>
                <li><a href="#">Vacantes Aplicadas</a></li>
                <li><a href="#">Configuracion</a></li>
            </ul>
        </li>
    </ul>
@endsection