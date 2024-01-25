@extends('layouts.app')

@section('content')

<a href="{{ route('index.oferta')}}">Volver</a>
<h1>{{ $oferta->nombre_vacante }}</h1>
<h1>{{ $oferta->descripcion_vacante }}</h1>
<h1>{{ $oferta->nombre_empresa }}</h1>
<h1>{{ $oferta->direccion }}</h1>
<h1>{{ $oferta->salario }}</h1>
<h1>{{ $oferta->fecha_inicio }}</h1>
<h1>{{ $oferta->fecha_fin }}</h1>
<h1>{{ $oferta->meses_experiencia }}</h1>
<h1>{{ $oferta->requisitos }}</h1>
<h1>{{ $oferta->id_ofertas }}</h1>
@endsection