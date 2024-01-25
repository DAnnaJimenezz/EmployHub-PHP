@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('/css/Ofertas/actualizarOferta.css') }}">
<section class="actualizarOferta">
    <h1 class="tituloOferta">Actualizar <span>Oferta</span></h1>
    <form action="{{ route('update.oferta', $oferta->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="titulo">Título de la oferta:</label>
        <input type="text" id="titulo" name="nombre_vacante" required value="{{ $oferta->nombre_vacante }}"><br><br>

        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion_vacante" rows="4" cols="50" required>{{ $oferta->descripcion_vacante }}</textarea><br><br>

        <label for="empresa">Empresa:</label>
        <input type="text" id="empresa" name="nombre_empresa" required value="{{ $oferta->nombre_empresa }}"><br><br>

        <label for="ubicacion">Dirección:</label>
        <input type="text" id="ubicacion" name="direccion" value="{{ $oferta->direccion }}"><br><br>

        <label for="salario">Salario:</label>
        <input type="number" id="salario" name="salario" value="{{ $oferta->salario }}"><br><br>

        <label for="fecha_publicacion">Fecha de inicio:</label>
        <input type="date" id="fecha_publicacion" name="fecha_inicio" value="{{ $oferta->fecha_inicio }}"><br><br><br>

        <label for="fecha_limite">Fecha de finalización:</label>
        <input type="date" id="fecha_limite" name="fecha_fin" value="{{ $oferta->fecha_fin }}"><br><br><br>

        <label for="experiencia">Meses de experiencia requeridos:</label>
        <input type="number" id="experiencia" name="meses_experiencia" min="0" max="120" required value="{{ $oferta->meses_experiencia }}">

        <label for="requisitos">Requisitos:</label>
        <textarea id="requisitos" name="requisitos" rows="4" cols="50" required>{{ $oferta->requisitos }}</textarea><br><br>

        <center><button type="submit" class="botonActualizarOferta" value="Update">Actualizar</button></center>
    </form>
</section>
@endsection