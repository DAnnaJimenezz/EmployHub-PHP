@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Conocimientos/createKnowledge.css') }}">

<section class="create">
    <h1 class="title">Crear tu <span>Conocimiento</span></h1>
    <form action="{{ route('store.conocimiento') }}" method="POST">
        @csrf

        <label>Escribe el nombre de tu Conocimiento:</label>
        <textarea  name="nombre_conocimiento" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Escribe la descripción del Conocimiento:</label><br>
        <textarea  name="descripcion_conocimiento" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Escribe el ID de la ocupación:</label>
        <input type="number"  name="id_ocupaciones" required><br><br>

        <label>Escribe el nombre de la ocupación:</label>
        <input type="text" name="nombre_ocupacion" required><br><br>

        <center><button type="submit" class="create-application-button">Crear</button></center>
    </form>
</section>
@endsection
