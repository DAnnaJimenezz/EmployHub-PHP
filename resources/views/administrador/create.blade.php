@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Administradores/administrators.css') }}">
<a href="{{ route ('administrator.index') }}"> Volver</a>

<section class="create">
    <h1 class="title">Crea tu <span>Administrador</span></h1>
    <form action="{{ route('administrator.store') }}" method="POST">
        @csrf

        <label>Escribe tu número de documento:</label>
        <textarea  type="text" name="numero_documento" rows="4" cols="50" required></textarea><br><br>

        <label>Selecciona tu tipo de documento:</label><br>
        <select id="document_type" name="tipo_documento">
            <option value="TI">TI</option>
            <option value="CC">CC</option>
            <option value="NIT">NIT</option>
            <option value="PASSPORT">PASAPORTE</option>
            <option value="CC_FOREIGNER">CC_EXTRANJERO</option>
        </select>

        <label>Escribe tu nombre:</label>
        <input type="text"  name="nombre" required><br><br>

        <label>Escribe tu apellido:</label>
        <input type="text" name="apellido" required><br><br>

        <label>Escribe tu correo electrónico:</label>
        <input type="text" name="correo_electronico" required><br><br>

        <label>Escribe tu contraseña:</label>
        <input type="password" name="contraseña" required><br><br>

        <label>Escribe el ID del tipo de usuario:</label>
        <input type="number" name="id_tipo_usuario" required><br><br>

        <center><button type="submit" class="create-application-button">Crear</button></center>
    </form>
    @endsection
</section>