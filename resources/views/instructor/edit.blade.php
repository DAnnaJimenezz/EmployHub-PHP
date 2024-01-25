@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Instructor/createInstructor.css') }}">
<a href="{{ route ('instructor') }}"> Volver</a>

<section class="create">
    <h1 class="title">Actualizar tu <span>Instructor</span></h1>
    <form action="{{ route('update.instructor', $instructor->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label>Escribe tu número de documento:</label>
        <textarea  type="text" name="numero_documento" rows="4" cols="50" value="{{ $instructor->numero_documento }}" required></textarea><br><br>

        <label>Selecciona tu tipo de documento:</label><br>
        <select id="tipo_documento" name="tipo_documento" value="{{ $instructor->tipo_documento }}">
            <option value="TI">TI</option>
            <option value="CC">CC</option>
            <option value="NIT">NIT</option>
            <option value="PASAPORTE">PASAPORTE</option>
            <option value="CC_EXTRANJERO">CC_EXTRANJERO</option>
        </select>

        <label>Escribe tu nombre:</label>
        <input type="text"  name="nombre" value="{{ $instructor->nombre_instructor }}" required><br><br>

        <label>Escribe tu apellido:</label>
        <input type="text" name="apellido" value="{{ $instructor->apellido_instructor }}" required><br><br>

        <label>Escribe tu correo electrónico:</label>
        <input type="text" name="correo_electronico" value="{{ $instructor->correo_electronico }}" required><br><br>

        <label>Escribe tu contraseña:</label>
        <input type="password" name="contrasena" value="{{ $instructor->contrasena }}" required><br><br>

        <center><button type="submit" class="create-application-button" value="Update">Actualizar</button></center>
    </form>
</section>
@endsection