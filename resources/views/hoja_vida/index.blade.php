@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('/css/Hoja_Vidas/indexLifeSheet.css') }}">
    <section class="box">
        <h1>Centro de Empleo <span>Laboral</span></h1>
        <section class="contenedor2">
            <section class="estadoProceso">
                @foreach ($hojas_vidas as $hoja_vida)
                    <article class="element01">
                        <img class="imagen01" alt="imagen01" src="../Img/Usuario.png" width="150px" height="150px" />

                        <p class="text01">
                            {{ $hoja_vida->descripcion_personal }}
                        </p>

                        <button class="button01"><img class="imagen02" src="{{ asset('img/Edit.png') }}" alt="imagen02" width="30px" height="30px" /></button>
                    </article>
                    <article class="element02">
                        <h4>Mis experiencias profesionales</h4>
                        <h5>{{ $hoja_vida->experiencia }}</h5>
                        <button class="button01"><img class="imagen02" src="{{ asset('img/Edit.png') }}" alt="imagen02" width="30px" height="30px" /></button>
                    </article>
                    <article class="element02">
                        <h4>Mis estudios</h4>
                        <h5>{{ $hoja_vida->educacion }}</h5>
                        <button class="button01"><img class="imagen02" src="{{ asset('img/Edit.png') }}" alt="imagen02" width="30px" height="30px" /></button>
                    </article>
                    <article class="element02">
                        <h4>Idiomas</h4>
                        <h5>{{ $hoja_vida->idiomas }}</h5>
                        <button class="button01"><img class="imagen02" src="{{ asset('img/Edit.png') }}" alt="imagen02" width="30px" height="30px" /></button>
                    </article>
                @endforeach
            </section>

            <section class="Vistas">
                <article class="obj01">
                    <h2>Plantillas de CV</h2>
                    <h3>
                        Tienes varias plantillas disponibles para descargar o imprimir tu currículum de manera cómoda y sencilla.
                    </h3>
                    <button>Diseña tu CV</button>
                </article>
                <article class="obj01">
                    <h2>Cartas</h2>
                    <h3>Crea o edita tus cartas de presentación y adjúntalas a las ofertas a las que estás aplicando. Las empresas valoran de manera muy positiva aquellas solicitudes que incluyen una carta de presentación.</h3>
                    <button>Crear Carta</button>
                </article>
            </section>
        </section>
    </section>
@endsection