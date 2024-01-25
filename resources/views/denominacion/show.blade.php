@extends('layouts.app')

@section('content')

<a href="{{ route('index.denominacion')}}">Back</a>
<h1>{{ $denominacion->descripcion_denominacion }}</h1>
<h1>{{ $denominacion->id_ocupaciones }}</h1>
<h1>{{ $denominacion->nombre_ocupacion }}</h1>
@endsection