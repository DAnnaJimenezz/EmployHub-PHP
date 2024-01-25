@extends('layouts.app')

@section('content')

<a href="{{ route('administrador.index')}}">Back</a>
<h1>{{ $administrador->numero_documento }}</h1>
<h1>{{ $administrador->tipo_documento }}</h1>
<h1>{{ $administrador->nombre }}</h1>
<h1>{{ $administrador->apellido }}</h1>
<h1>{{ $administrador->correo_electronico }}</h1>
<h1>{{ $administrador->contraseña }}</h1>
<h1>{{ $administrador->id_tipo_usuario }}</h1>
@endsection