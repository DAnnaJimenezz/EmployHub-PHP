@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/edit.css') }}">

<form action="{{ route('update.ponderacion', $ponderacion ->id) }}" method="POST">
    @method('PUT')
    @csrf
    <label>Seleccione los idiomas que conoce:</label>
    <select id="idiomas" name="idiomas" value="{{ $ponderacion-> idiomas }}">
        <option value="INGLÉS">INGLÉS</option>
        <option value="FRANCÉS">FRANCÉS</option>
        <option value="ALEMÁN">ALEMÁN</option>
        <option value="ESPAÑOL">ESPAÑOL</option>
    </select><br><br>

    <label>Seleccione hasta qué nivel de estudio ha cursado:</label>
    <select id="tipo_educacion" name="educacion" value="{{ $ponderacion-> educacion }}">
        <option value="LICENCIATURA">LICENCIATURA</option>
        <option value="POSTGRADO">POSTGRADO</option>
        <option value="GRADO">GRADO</option>
        <option value="TÉCNICO">TÉCNICO</option>
        <option value="TECNÓLOGO">TECNÓLOGO</option>
        <option value="INGENIERO">INGENIERO</option>
    </select><br><br>

    <label>Escriba su experiencia laboral:</label>
    <textarea  name="experiencia_laboral" rows="4" cols="50" required>{{ $ponderacion-> experiencia_laboral }}</textarea><br><br>

    <label>Escriba sus habilidades técnicas:</label><br>
    <textarea  name="habilidades_tecnicas" rows="4" cols="50" required>{{ $ponderacion-> habilidades_tecnicas }}</textarea><br><br>

    <label>Escriba sus proyectos anteriores:</label>
    <input type="text"  name="proyecto_anterior" value="{{ $ponderacion-> proyecto_anterior }}"  required><br><br>

    <label>Escriba referencias:</label>
    <input type="text" name="referencias" value="{{ $ponderacion-> referencias }}" required><br><br>

    <label>Escriba sus cursos adicionales:</label>
    <input type="text" name="curso_adicional" value="{{ $ponderacion-> curso_adicional }}" required><br><br>

    <center><button type="submit" class="create-application-button" value="Update">Actualizar</button></center>
</form>
@endsection