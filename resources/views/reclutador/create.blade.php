@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Reclutadores/crearReclutador.css') }}">
<a href="{{ route ('reclutador') }}"> Regresar</a>

<section class="create">
    <h1 class="title">Cree su <span>Reclutador</span></h1>
    <form action="{{ route('store.reclutador') }}" method="POST">
        @csrf

        <label>Escriba su número de documento:</label>
        <input name="numero_documento" type="number" required>

        <label for="tipo_documento">Tipo de Documento</label>
        <select id="tipo_documento" name="tipo_documento">
            <option value="TI">TI</option>
            <option value="CC">CC</option>
            <option value="NIT">NIT</option>
            <option value="PASAPORTE">PASAPORTE</option>
            <option value="CC_EXTRANJERO">CC_EXTRANJERO</option>
        </select>

        <label>Escriba su nombre:</label>
        <input type="text"  name="nombre" required><br><br>

        <label>Escriba su teléfono:</label>
        <input name="telefono" type="number" required><br><br>

        <label>Escriba su correo electrónico:</label>
        <input type="text" name="correo_electronico" required><br><br>

        <label for="" class="form-label">Id de Tipo de Usuario</label>
        <select class="" name="id_tipo_usuario" id="id_tipo_usuario">
            @foreach ($tipos_usuario as $tipo_usuario)
            <option value="{{$tipo_usuario->id}}">{{$tipo_usuario->nombre_tipo_usuario }}</option>    
            @endforeach
        </select>

        <center><button type="submit" class="create-application-button">Crear</button></center>
    </form>
</section>
@endsection