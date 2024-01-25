@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Conocimientos/createKnowledge.css') }}">
<a href="{{ route ('conocimiento') }}"> Volver</a>

<section class="create">
    <h1 class="title">Editar tu <span>Conocimiento</span></h1>
    <form action="{{ route('update.conocimiento', $conocimiento->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label>Escribe el nombre de tu Conocimiento:</label>
        <textarea  value="{{ $conocimiento-> nombre_conocimiento }}" name="nombre_conocimiento" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Escribe la descripción del Conocimiento:</label><br>
        <textarea  value="{{ $conocimiento-> descripcion_conocimiento }}"  name="descripcion_conocimiento" rows="4" cols="50" type="text" required></textarea><br><br>

        <label>Escribe el ID de la ocupación:</label>
        <input value="{{ $conocimiento-> id_ocupaciones }}" type="number" name="id_ocupaciones" required><br><br>

        <label>Escribe el nombre de la ocupación:</label>
        <input  value="{{ $conocimiento-> nombre_conocmiento }}" type="text" name="nombre_conocimiento" required><br><br>

        <center><button type="submit" class="create-application-button" value="Update">Actualizar</button></center>
    </form>
</section>
@endsection
