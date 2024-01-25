@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Denominaciones/createDenomination.css') }}">
<a href="{{ route('denominacion') }}"> Volver</a>

<section class="create">
    <h1 class="title">Crear tu <span>Denominación</span></h1>
    <form action="{{ route('store.denominacion') }}" method="POST">
        @csrf

        <label>Escribe la descripción de la denominación:</label>
        <textarea  name="descripcion_denominacion" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Ingresa el ID de la ocupación:</label><br>
        <textarea  name="id_ocupaciones" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Escribe el nombre de la ocupación:</label>
        <input type="number"  name="nombre_ocupacion" required><br><br>

        <center><button type="submit" class="create-application-button">Crear</button></center>
    </form>
</section>
@endsection