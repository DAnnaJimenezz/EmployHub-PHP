@extends('layouts.app')

@section('content')

<a href="{{ route('reclutador')}}">Volver</a>
<h1>{{ $reclutador->numero_documento }}</h1>
<h1>{{ $reclutador->tipo_documento }}</h1>
<h1>{{ $reclutador->nombre }}</h1>
<h1>{{ $reclutador->telefono }}</h1>
<h1>{{ $reclutador->correo_electronico }}</h1>
@endsection