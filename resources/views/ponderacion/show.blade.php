@extends('layouts.app')

@section('content')

<a href="{{ route('ponderacion')}}">Volver</a>
<h1>{{ $ponderacion->idiomas }}</h1>
<h1>{{ $ponderacion->educacion }}</h1>
<h1>{{ $ponderacion->experiencia_laboral }}</h1>
<h1>{{ $ponderacion->habilidades_tecnicas }}</h1>
<h1>{{ $ponderacion->proyecto_anterior }}</h1>
<h1>{{ $ponderacion->referencias }}</h1>
<h1>{{ $ponderacion->curso_adicional }}</h1>
@endsection