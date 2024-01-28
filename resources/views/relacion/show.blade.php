@extends('layouts.app')

@section('content')

<a href="{{ route('relacion')}}">Volver</a>
<h1>{{ $relacion->nombre_relacion_ocupacion }}</h1>
<h1>{{ $relacion->id_ocupaciones }}</h1>
<h1>{{ $relacion->nombre_ocupacion }}</h1>
@endsection