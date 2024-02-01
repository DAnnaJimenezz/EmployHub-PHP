@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Cargos/createPost.css') }}">
<a href="{{ route('cargo') }}"> Volver</a>

<section class="create">
    <h1 class="title">Crear tu <span>Cargo</span></h1>
    <form action="{{ route('store.cargo') }}" method="POST">
        @csrf

        <label>Escribe el nombre del cargo:</label>
        <textarea  type="text" name="nombre_cargo" rows="4" cols="50" required></textarea><br><br>

        <label>Escribe la dirección:</label>
        <input type="text"  name="direccion" required><br><br>

        <label>Escribe el teléfono:</label>
        <input type="text" name="telefono" required><br><br>

        <center><button type="submit" class="create-application-button">Crear</button></center>
    </form>
</section>
@endsection
