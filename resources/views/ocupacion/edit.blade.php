@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Occupations/createOccupation.css') }}">
<a href="{{ route ('occupation') }}"> Volver</a>

<section class="create">
    <h1 class="title">Actualizar <span>Ocupación</span></h1>
    <form action="{{ route('update.occupation', $occupation->id) }}" method="POST">
        @method('PUT')
        @csrf

        <label>Escribe el nombre de la ocupación:</label>
        <textarea name="nombre_ocupacion" rows="4" cols="50" type="text" required>{{ $occupation->nombre_ocupacion }}</textarea><br><br>

        <label>Escribe la descripción de la ocupación:</label><br>
        <textarea name="descripcion_ocupacion" rows="4" cols="50" type="text" required>{{ $occupation->descripcion_ocupacion }}</textarea><br><br>

        <label>Ingresa el ID del cargo:</label>
        <input type="number" name="id_cargo" value="{{ $occupation->id_cargo }}" required><br><br>

        <center><button type="submit" class="create-application-button" value="Update">Actualizar</button></center>
    </form>
</section>
@endsection
