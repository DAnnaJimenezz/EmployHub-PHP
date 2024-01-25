@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Funciones/createFuncion.css') }}">
<a href="{{ route ('funcion') }}"> Volver</a>

<section class="create">
    <h1 class="title">Actualizar tu <span>Función</span></h1>
    <form action="{{ route('update.funcion', $funcion->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label>Escribe la descripción de la función:</label>
        <textarea  value="{{ $funcion->descripcion_funcion }}" name="descripcion_funcion" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Ingresa el ID de la ocupación:</label><br>
        <textarea   value="{{ $funcion->id_ocupaciones }}"  name="id_ocupaciones" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Escribe el nombre de la ocupación:</label>
        <input value="{{ $funcion->nombre_ocupacion }}" type="number" name="nombre_ocupacion" required><br><br>

        <center><button type="submit" class="create-application-button" value="Actualizar">Actualizar</button></center>
    </form>
</section>
@endsection
