@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Relaciones/createRelation.css') }}">

<section class="create">
    <h1 class="title">Cree su <span>Relación</span></h1>
    <form action="{{ route('store.relacion') }}" method="POST">
        @csrf

        <label>Escriba el nombre de la ocupación relacionada:</label>
        <input name="nombre_relacion_ocupacion" type="text" required></><br><br>

        <label for="id_ocupaciones">Escriba el ID de la ocupación:</label>
        <input type="number" id="id_ocupaciones" name="id_ocupaciones" class="textarea1" required><br><br>

        <label for="nombre_ocupacion">Escriba el nombre de la ocupación:</label>
        <input type="text" id="nombre_ocupacion" name="nombre_ocupacion" class="textarea1" required><br><br>

        <center><button type="submit" class="create-application-button">Crear</button></center>
    </form>
</section>
@endsection