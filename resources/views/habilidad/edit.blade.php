@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Habilidades/actualizarHabilidades.css') }}">
<a href="{{ route ('habilidad') }}"> Regresar</a>

<section class="create">
    <h1 class="title">Actualizar tu <span>Habilidad</span></h1>
    <form action="{{ route('update.habilidad', $habilidad->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label>Escribe el nombre de tu habilidad:</label>
        <textarea  value="{{ $habilidad->nombre_habilidad }}" name="nombre_habilidad" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Escribe la descripción de la habilidad:</label><br>
        <textarea   value="{{ $habilidad->descripcion_habilidad }}"  name="descripcion_habilidad" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Escribe el ID de la ocupación:</label>
        <input value="{{ $habilidad->id_ocupaciones }}" type="number" name="id_ocupaciones" required><br><br>

        <label>Escribe el nombre de la ocupación:</label>
        <input  value="{{ $habilidad->nombre_ocupacion }}" type="text" name="nombre_ocupacion" required><br><br>

        <center><button type="submit" class="create-application-button" value="Update">Actualizar</button></center>
    </form>
</section>
@endsection
