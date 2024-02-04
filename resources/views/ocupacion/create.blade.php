@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Ocupaciones/createOccupation.css') }}">
<a href="{{ route ('ocupacion') }}"> Volver</a>

<section class="create">
    <h1 class="title">Crear tu <span>Ocupación</span></h1>
    <form action="{{ route('store.ocupacion') }}" method="POST">
        @csrf

        <label>Escribe el nombre de la ocupación:</label>
        <textarea name="nombre_ocupacion" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Escribe la descripción de la ocupación:</label><br>
        <textarea name="descripcion_ocupacion" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Ingresa el ID del cargo:</label>
        <input type="number" name="id_cargo" required><br><br>

        <center><button type="submit" class="create-application-button">Crear</button></center>
    </form>
</section>
@endsection