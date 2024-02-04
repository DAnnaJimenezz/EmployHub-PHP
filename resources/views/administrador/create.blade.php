@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Administradores/administrators.css') }}">
<a href="{{ route ('administrador.index') }}"> Volver</a>

<section class="create">
    <h1 class="title">Crea tu <span>Administrador</span></h1>
    <form action="{{ route('administrador.store') }}" method="POST">
        @csrf

        <label>Escribe tu número de documento:</label>
        <input  type="text" name="numero_documento" rows="4" cols="50" required></input><br><br>

        <label>Selecciona tu tipo de documento:</label><br>
        <select id="document_type" name="tipo_documento">
            <option value="TI">TI</option>
            <option value="CC">CC</option>
            <option value="NIT">NIT</option>
            <option value="PASAPORTE">PASAPORTE</option>
            <option value="CC_EXTRANJERO">CC_EXTRANJERO</option>
        </select>

        <label>Escribe tu nombre:</label>
        <input type="text"  name="nombre" required><br><br>

        <label>Escribe tu apellido:</label>
        <input type="text" name="apellido" required><br><br>

        <label>Escribe tu correo electrónico:</label>
        <input type="text" name="correo_electronico" required><br><br>

        <label>Escribe tu contraseña:</label>
        <input type="password" name="contraseña" required><br><br>

        <label for="exampleInputEmail" class="id_tipo_usuario">Tipo de Usuario</label>
        <select class="tipo_usuario" name="id_tipo_usuario" id="">
            @foreach ($tipo_usuario as $tipo_usuarios)
            <option value="{{$tipo_usuarios->id}}">{{$tipo_usuarios->nombre_tipo_usuario}}</option>    
            @endforeach
        </select>

        <center><button type="submit" class="create-application-button">Crear</button></center>
    </form>
    @endsection
</section>