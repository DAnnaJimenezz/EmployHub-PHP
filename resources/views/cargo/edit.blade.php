@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Cargos/createPost.css') }}">
<a href="{{ route('cargo') }}"> Volver</a>

<section class="create">
    <h1 class="title">Editar tu <span>Publicación</span></h1>
    <form action="{{ route('update.cargo', $cargo->id) }}" method="POST">
        @method('PUT')
        @csrf

        <label>Escribe el nombre de la publicación:</label>
        <textarea  type="text" name="nombre_cargo" rows="4" cols="50" value="{{ $cargo-> nombre_cargo }}" required></textarea><br><br>

        <label>Escribe la dirección:</label>
        <input type="text"  name="direccion" value="{{ $cargo-> direccion }}" required><br><br>

        <label>Escribe el teléfono:</label>
        <input type="text" name="telefono" value="{{ $cargo-> telefono }}" required><br><br>

        <center><button type="submit" class="create-application-button" value="Update">Actualizar</button></center>
    </form>
</section>
@endsection
