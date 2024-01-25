@extends('layouts.app')
@section('content')
<a href="{{ route ('hoja_vida') }}"> Volver</a>

<link rel="stylesheet" href="{{ asset('/css/Hoja_Vidas/createLifeSheet.css') }}">
<section class="box">
    <h1>Crear Hoja de Vida</h1>
    <form method="post" action="{{ route('store.hoja_vida') }}">
        @csrf

        <label for="descripcion_personal">Descripción Personal:</label>
        <input type="text" name="descripcion_personal"  required>

        <label for="idiomas">Idiomas:</label>
        <textarea name="idiomas"  required></textarea>

        <label for="experiencia">Experiencia:</label>
        <textarea name="experiencia" required></textarea>

        <label for="educacion">Educación:</label>
        <textarea name="educacion" required></textarea>

        <center><button type="submit" class="create-application-button">Crear</button></center>
    </form>
</section>
@endsection
