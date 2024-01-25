@extends('layouts.app')
@section('content')
<link rel="stylesheet"  href="{{ asset('/css/Ofertas/crearOferta.css') }}">
    <section class="crearOferta">
        <h1 class="tituloOferta">Crea Tu <span>Oferta</span></h1>
        <form action="{{ route('store.oferta') }}" method="POST">
            @csrf
            <label for="titulo">Título de la oferta:</label>
            <input type="text" id="titulo" name="nombre_vacante" required><br><br>
    
            <label for="descripcion">Descripción:</label><br>
            <textarea id="descripcion" name="descripcion_vacante" rows="4" cols="50" required></textarea><br><br>
    
            <label for="empresa">Empresa:</label>
            <input type="text" id="empresa" name="nombre_empresa" required><br><br>
    
            <label for="ubicacion">Dirección:</label>
            <input type="text" id="ubicacion" name="direccion"><br><br>
    
            <label for="salario">Salario:</label>
            <input type="number" id="salario" name="salario"><br><br>
    
            <label for="fecha_publicacion">Fecha de inicio:</label>
            <input type="date" id="fecha_publicacion" name="fecha_inicio"><br><br><br>

            <label for="fecha_limite">Fecha de finalización:</label>
            <input type="date" id="fecha_limite" name="fecha_fin"><br><br><br>

            <label for="experiencia">Meses de experiencia requeridos:</label>
            <input type="number" id="experiencia" name="meses_experiencia" min="0" max="120" required>
            
            <label for="tipo_contrato" class="form-label">Tipo de Contrato</label>
            <select class="form-select" name="id_tipos_contrato" id="">
                @foreach ($tipos_contrato as $tipo_contrato)
                <option value="{{$tipo_contrato->id}}">{{$tipo_contrato->nombre_contrato}}</option>    
                @endforeach
            </select>
    
            <label for="requisitos">Requisitos:</label>
            <textarea id="requisitos" name="requisitos" rows="4" cols="50" required></textarea><br><br>

            <center><button type="submit" class="botonCrearOferta">Crear Oferta</button></center>
        </form>
    </section>
@endsection