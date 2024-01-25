@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Denominaciones/createDenomination.css') }}">
<a href="{{ route('denominacion') }}"> Volver</a>

<section class="create">
    <h1 class="title">Editar tu <span>Denominación</span></h1>
    <form action="{{ route('update.denominacion', $denominacion->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label>Escribe la descripción de la denominación:</label>
        <textarea  value="{{ $denominacion-> descripcion_denominacion }}" name="denomination_description" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Ingresa el ID de la ocupación:</label><br>
        <textarea   value="{{ $denominacion-> id_ocupaciones }}"  name="id_occupations" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Escribe el nombre de la ocupación:</label>
        <input value="{{ $denominacion-> nombre_ocupacion }}" type="number" name="occupation_name" required><br><br>

        <center><button type="submit" class="create-application-button" value="Update">Actualizar</button></center>
    </form>
</section>
@endsection
