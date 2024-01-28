@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('/css/Mi_Aplicacion/my_application.css') }}">

<h1>Mis postulaciones</h1>

@foreach ($ofertas as $oferta)
    <section class="contenedor">
        <h2>{{ $oferta['description_vacant'] }}</h2>
        <section class="botones">
            <button class="botonHorizontal">Postulada</button>
            <button class="botonHorizontal">CV Vista</button>
            <button class="botonHorizontal">En proceso</button>
            <button class="botonHorizontal">Finalizada</button>
        </section>
        <section class="boton1">
            <button class="botonUnico">{{ $oferta['number_vacancies_applied'] }} vacantes postuladas</button>
        </section>
    </section>
@endforeach