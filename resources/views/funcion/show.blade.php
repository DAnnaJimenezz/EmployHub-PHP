@extends('layouts.app')

@section('content')

<a href="{{ route('index.funcion')}}">Volver</a>
<h1>{{ $funcion->descripcion_funcion }}</h1>
<h1>{{ $funcion->id_ocupaciones }}</h1>
<h1>{{ $funcion->nombre_ocupacion }}</h1>
@endsection