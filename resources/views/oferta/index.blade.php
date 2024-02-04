@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('/css/Ofertas/indexOffert.css') }}">
<div class="contenedor-supremo">
    <div class="container1">
        <ul>
            @forelse ($ofertas as $oferta)
                <div class="contenedor">
                    <section class="contenedor-izquierda">
                        <h2>{{ $oferta->nombre_vacante }}</h2>
                        <li class="oferta-item"><a>Salario: {{ $oferta->salario }}</a></li>
                        <li class="oferta-item"><a>Meses de experiencia: {{ $oferta->meses_experiencia }}</a></li>
                        <li class="oferta-item"><a>Tipo de contrato: {{ $oferta->tipo_contratos->nombre_contrato }}</a></li>
                        <li class="oferta-item"><a>Localidad: {{ $oferta->direccion }}</a></li>
                        
                        <section class="contenedor-derecha">
                            <li class="oferta-item"><a>Vacantes: {{ $oferta->vacantes }}</a></li>
                            <li class="oferta-item"><a>Postulaciones: {{ $oferta->postulaciones }}</a></li>
                            <li class="oferta-item"><a>Fecha publicación: {{ $oferta->fecha_inicio }}</a></li>
                            <li class="oferta-item"><a>Fecha cierre: {{ $oferta->fecha_fin }}</a></li>
                            <section class="boton">
                            <a href="{{ route('postulacion') }}"><button class="botonUnico">Postularme</button></a>
                            </section>
                        </section>
                    </section>
                </div>
            @empty
                <p>No hay datos.</p>
            @endforelse
        </ul>
    </div>
    <div class="container2">
        <section class="contenedor1">
            <h3>Resultado de búsqueda</h3>
            <section class="segundo">
                <label for="experiencia" class="label">Experiencia:</label>
                <select id="experiencia" name="experiencia" class="select">
                    <option value="ninguna">Ninguna</option>
                    <option value="sin-experiencia">Sin experiencia</option>
                    <option value="años">0 - 1 años</option>
                    <option value="años">1 - 2 años</option>
                    <option value="años">2 - 3 años</option>
                    <option value="años">Más de 3 años</option>
                </select><br><br>
                
                <label for="tipo_contrato" class="label">Tipo de Contrato:</label>
                <select id="tipo_contrato" name="tipo_contrato" class="select">
                    <option value="">No aplica</option>
                    <option value="fijo">Fijo</option>
                    <option value="temporal">Temporal</option>
                    <option value="indefinido">Indefinido</option>
                    <option value="obra">Por obra</option>
                    <option value="otra">Otra</option>
                    <option value="prestacion">Prestación de servicios</option>
                    <option value="nombramiento">Nombramiento temporal</option>
                    <option value="libre">Libre nombramiento y remoción</option>
                </select><br><br>
                
                <label for="tipo_jornada" class="label">Tipo de Jornada:</label>
                <select id="tipo_jornada" name="tipo_jornada" class="select">
                    <option value="">No aplica</option>
                    <option value="completa">Completa</option>
                    <option value="medio">Medio tiempo</option>
                    <option value="otro">Otro</option>
                </select><br><br>
                
                <label for="salario" class="label">Salario:</label>
                <select id="salario" name="salario" class="select">
                    <option value="salario">$ 10.000.001 - $ 12.500.000</option>
                    <option value="salario">$ 12.500.00 - $15.000.000</option>
                    <option value="salario">$ 15.000.001 - $18.000.000</option>
                    <option value="salario">$ 18.000.001 - $20.000.000</option>
                    <option value="salario">Más de - $ 20.000.000</option>
                    <option value="salario">$ 2.204.799 - $ 3.658.699</option>
                    <option value="salario">$ 2.517.479 - 4.214.845</option>
                    <option value="salario">No definido</option>
                </select><br><br>
                
                <label for="fecha_publicacion" class="label">Fecha de publicación:</label>
                <input type="date" id="fecha_publicacion" name="fecha_publicacion" class="select"><br><br><br>
            </section>
        </section>
    </div>
</div>                
@endsection