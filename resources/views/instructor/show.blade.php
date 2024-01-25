@extends('layouts.app')

@section('content')

<a href="{{ route('instructor')}}">Volver</a>
<h1>{{ $instructor->numero_documento }}</h1>
<h1>{{ $instructor->tipo_documento }}</h1>
<h1>{{ $instructor->nombre }}</h1>
<h1>{{ $instructor->apellido }}</h1>
<h1>{{ $instructor->correo_electronico }}</h1>
<h1>{{ $instructor->contrasena }}</h1>
@endsection