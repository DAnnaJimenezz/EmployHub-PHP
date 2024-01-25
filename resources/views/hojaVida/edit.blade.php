@extends('layouts.app')
@section('content')
<a href="{{ route ('hoja_vida') }}"> Volver</a>

<link rel="stylesheet" href="{{ asset('/css/Hoja_Vidas/createLifeSheet.css') }}">
<section class="box">
    <h1>Actualizar Hoja de Vida</h1>
    <form method="post" action="{{ route('update.hoja_vida', $hoja_vida->id) }}">
        @method('PUT')
        @csrf

        <label for="descripcion_personal">Descripción Personal:</label>
        <input type="text" name="descripcion_personal" value="{{ $hoja_vida->descripcion_personal }}" required>

        <label for="idiomas">Idiomas:</label>
        <textarea name="idiomas" required>{{ $hoja_vida->idiomas }}</textarea>

        <label for="experiencia">Experiencia:</label>
        <textarea name="experiencia" required>{{ $hoja_vida->experiencia }}</textarea>

        <label for="educacion">Educación:</label>
        <textarea name="educacion" required>{{ $hoja_vida->educacion }}</textarea>

        <center><button type="submit" class="create-application-button" value="Update">Actualizar</button></center>
    </form>
</section>
@endsection
