@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Selectors/createSelector.css') }}">
<a href="{{ route ('seleccionador') }}"> Volver</a>

<section class="create">
    <h1 class="title">Crea tu <span>Selector</span></h1>
    <form action="{{ route('store.seleccionador') }}" method="POST">
        @csrf

        <label>Escribe tu número de documento:</label>
        <input name="numero_documento_selector" type="number" required><br><br>

        <label for="tipo_selector">Tipo de Documento</label>
        <select id="tipo_selector" name="tipo_documento_selector">
            <option value="TI">TI</option>
            <option value="CC">CC</option>
            <option value="NIT">NIT</option>
            <option value="PASAPORTE">PASAPORTE</option>
            <option value="CC_EXTRANJERO">CC_EXTRANJERO</option>
        </select>

        <label>Escribe tu nombre:</label>
        <input type="text"  name="nombre_selector" required><br><br>

        <label>Escribe tu teléfono:</label>
        <input type="number" name="telefono_selector" required><br><br>

        <label>Escribe tu correo electrónico:</label>
        <input type="text" name="correo_electronico_selector" required><br><br>

        <label for="" class="form-label">ID del Tipo de Usuario</label>
        <select class="" name="id_tipo_usuario" id="id_tipo_usuario">
            @foreach ($user_type as $user_type)
            <option value="{{$user_type->id}}">{{$user_type->user_type_name }}</option>    
            @endforeach
        </select>

        <center><button type="submit" class="create-application-button">Crear</button></center>
    </form>
    @endsection
</section>