@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Selectors/createSelector.css') }}">
<a href="{{ route ('seleccionador') }}"> Regresar</a>

<section class="create">
    <h1 class="title">Editar tu <span>Selector</span></h1>
    <form action="{{ route('update.seleccionador', $seleccionador->id) }}" method="POST">
        @method('PUT')
        @csrf

        <label>Escribe tu número de documento:</label>
        <input name="numero_documento_selector" type="number" required value="{{ $seleccionador->numero_documento_selector }}"><br><br>

        <label for="tipo_selector">Tipo de Documento</label>
        <select id="tipo_selector" name="tipo_documento_selector" value="{{ $seleccionador->tipo_documento_selector }}">
            <option value="TI">TI</option>
            <option value="CC">CC</option>
            <option value="NIT">NIT</option>
            <option value="PASAPORTE">PASAPORTE</option>
            <option value="CC_EXTRANJERO">CC_EXTRANJERO</option>
        </select>

        <label>Escribe tu nombre:</label>
        <input type="text"  name="nombre_selector" required value="{{ $seleccionador->nombre_selector }}"><br><br>

        <label>Escribe tu teléfono:</label>
        <input name="telefono_selector" type="number" required value="{{ $seleccionador->telefono_selector }}"><br><br>

        <label>Escribe tu correo electrónico:</label>
        <input type="text" name="correo_electronico_selector" required value="{{ $seleccionador->correo_electronico_selector }}"><br><br>

        <center><button type="submit" class="create-application-button" value="Update">Actualizar</button></center>
    </form>
</section>
@endsection