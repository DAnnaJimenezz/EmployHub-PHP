@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Instructor/createInstructor.css') }}">
<a href="{{ route ('instructor') }}"> Volver</a>

<section class="create">
    <h1 class="title">Crear tu <span>Instructor</span></h1>
    <form action="{{ route('store.instructor') }}" method="POST">
        @csrf

        <label>Escribe tu número de documento:</label>
        <input  type="number" name="numero_documento" required></input><br><br>

        <label>Selecciona tu tipo de documento:</label><br>
        <select id="tipo_documento" name="tipo_documento">
            <option value="TI">TI</option>
            <option value="CC">CC</option>
            <option value="NIT">NIT</option>
            <option value="PASAPORTE">PASAPORTE</option>
            <option value="CC_EXTRANJERO">CC_EXTRANJERO</option>
        </select>

        <label>Escribe tu nombre:</label>
        <input type="text"  name="nombre_instructor" required><br><br>

        <label>Escribe tu apellido:</label>
        <input type="text" name="apellido_instructor" required><br><br>

        <label>Escribe tu correo electrónico:</label>
        <input type="text" name="correo_electronico" required><br><br>

        <label>Escribe tu contraseña:</label>
        <input type="password" name="contraseña" required><br><br>

        <label>Id Administrador:</label>
        <input type="number" name="id_administrador" required><br><br

        <center><button type="submit" class="create-application-button">Crear</button></center>
    </form>
</section>
@endsection