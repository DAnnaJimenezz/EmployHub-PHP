@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Administradores/administrators.css') }}">
<a href="{{ route ('administrador.index') }}"> Volver</a>

<section class="create">
    <h1 class="title">Editar tu <span>Administrador</span></h1>
    <form action="{{ route('administrador.update', $administrador->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label>Escribe tu número de documento:</label>
        <textarea  type="text" name="numero_documento" rows="4" cols="50" value="{{ $administrador-> numero_documento }}" required></textarea><br><br>

        <label>Selecciona tu tipo de documento:</label><br>
        <select id="document_type" name="tipo_documento" value="{{ $administrador-> tipo_documento }}">
            <option value="TI">TI</option>
            <option value="CC">CC</option>
            <option value="NIT">NIT</option>
            <option value="PASSPORT">PASAPORTE</option>
            <option value="CC_FOREIGNER">CC_EXTRANJERO</option>
        </select>

        <label>Escribe tu nombre:</label>
        <input type="text"  name="nombre" value="{{ $administrador-> nombre }}" required><br><br>

        <label>Escribe tu apellido:</label>
        <input type="text" name="apellido" value="{{ $administrador-> apellido }}" required><br><br>

        <label>Escribe tu correo electrónico:</label>
        <input type="text" name="correo_electronico" value="{{ $administrador-> correo_electronico }}" required><br><br>

        <label>Escribe tu contraseña:</label>
        <input type="password" name="contraseña" value="{{ $administrador-> contraseña }}" required><br><br>

        <label>Escribe el ID del tipo de usuario:</label>
        <input type="number" name="id_tipo_usuario" value="{{ $administrador-> id_tipo_usuario }}" required><br><br>

        <center><button type="submit" class="create-application-button" value="Update">Actualizar</button></center>
    </form>
    @endsection
</section>