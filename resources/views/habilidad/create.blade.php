@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Habilidades/crearHabilidades.css') }}">
<a href="{{ route ('habilidad') }}"> Regresar</a>

<section class="create">
    <h1 class="title">Crear tu <span>Habilidad</span></h1>
    <form action="{{ route('store.habilidad') }}" method="POST">
        @csrf

        <label>Escribe el nombre de tu habilidad:</label>
        <textarea  name="nombre_habilidad" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Escribe la descripción de la habilidad:</label><br>
        <textarea  name="descripcion_habilidad" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Escribe el ID de la ocupación:</label>
        <input type="number"  name="id_ocupaciones" required><br><br>

        <label>Escribe el nombre de la ocupación:</label>
        <input type="text" name="nombre_ocupacion" required><br><br>

        <center><button type="submit" class="create-application-button">Crear</button></center>
    </form>
</section>
@endsection
