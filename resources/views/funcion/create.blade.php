@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Funciones/createFuncion.css') }}">
<a href="{{ route ('funcion') }}"> Volver</a>

<section class="create">
    <h1 class="title">Crear tu <span>Función</span></h1>
    <form action="{{ route('store.funcion') }}" method="POST">
        @csrf

        <label>Escribe la descripción de la función:</label>
        <textarea  name="descripcion_funcion" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Ingresa el ID de la ocupación:</label><br>
        <input  name="id_ocupaciones" rows="4" cols="50" type="number" required><br><br>

        <label>Escribe el nombre de la ocupación:</label>
        <input type="text"  name="nombre_ocupacion" required><br><br>

        <center><button type="submit" class="create-application-button">Crear</button></center>
    </form>
</section>
@endsection
