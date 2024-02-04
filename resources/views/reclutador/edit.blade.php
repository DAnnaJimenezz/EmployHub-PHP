@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Reclutadores/editarReclutador.css') }}">
<a href="{{ route ('reclutador') }}"> Regresar</a>

<section class="create">
    <h1 class="title">Editar su <span>Reclutador</span></h1>
    <form action="{{ route('update.reclutador', $reclutador->id) }}" method="POST">
        @method('PUT')
        @csrf

        <label>Escriba su número de documento:</label>
        <input name="numero_documento" type="number" required value="{{ $reclutador->numero_documento }}"><br><br>

        <label for="tipo_documento">Tipo de Documento</label>
        <select id="tipo_documento" name="tipo_documento" value="{{ $reclutador->tipo_documento }}">
            <option value="TI">TI</option>
            <option value="CC">CC</option>
            <option value="NIT">NIT</option>
            <option value="PASAPORTE">PASAPORTE</option>
            <option value="CC_EXTRANJERO">CC_EXTRANJERO</option>
        </select><br><br>

        <label>Escriba su nombre:</label>
        <input type="text" name="nombre" required value="{{ $reclutador->nombre }}"><br><br>

        <label>Escriba su teléfono:</label>
        <input name="telefono" type="number" required value="{{ $reclutador->telefono }}"><br><br>

        <label>Escriba su correo electrónico:</label>
        <input type="text" name="correo_electronico" required value="{{ $reclutador->correo_electronico }}"><br><br>

        <center><button type="submit" class="create-application-button" value="Update">Actualizar</button></center>
    </form>
    @endsection
</section>