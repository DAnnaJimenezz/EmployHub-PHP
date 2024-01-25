@extends('layouts.app')

@section('content')

<a href="{{ route('index.hoja_vida')}}">Volver</a>
<h1>{{ $hoja_vida->descripcion_personal }}</h1>
<h1>{{ $hoja_vida->experiencia }}</h1>
<h1>{{ $hoja_vida->educacion }}</h1>
<h1>{{ $hoja_vida->idiomas }}</h1>
@endsection