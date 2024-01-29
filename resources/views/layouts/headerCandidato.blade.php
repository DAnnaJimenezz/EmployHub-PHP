@extends('layouts.app')
@section('content')
    <ul class="menu-candidate">
        <li class="contenedor-candidate">
            <a href="#termino">Candidato</a>
            <ul class="sub-Menu-candidate">
                <li><a href="">Consultar Vacante</a></li>
                <li><a href="{{ route('create.lifeSheet')}}">Registrar Hoja de Vida</a></li>
                <li><a href="{{ route('offer') }}">Aplicar a una vacante</a></li>
                <li><a href="">Consultar Estado de Proceso</a></li>
            </ul>
        </li>
    </ul>


<section class="Busqueda">
    <h1>Centro de <span>Empleo</span></h1>
        <form action="#" method="get" class="search">
            <input type="text" placeholder="Busqueda de empleo" name="src">
            <button type="submit"> <img src = "{{ asset('../img/Search.png')}}" alt = "Busqueda" > </button>
        </form>
</section>
@endsection