@extends('layouts.app')

@section('content')

<a href="{{ route('index.ocupacion')}}">Volver</a>
<h1>{{ $ocupacion->nombre_ocupacion }}</h1>
<h1>{{ $ocupacion->descripcion_ocupacion }}</h1>
<h1>{{ $ocupacion->id_cargo }}</h1>
@endsection