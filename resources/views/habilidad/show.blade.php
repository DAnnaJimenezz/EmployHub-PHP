@extends('layouts.app')

@section('content')

<a href="{{ route('habilidad')}}">Back</a>
<h1>{{ $habilidad->nombre_habilidad }}</h1>
<h1>{{ $habilidad->descripcion_habilidad }}</h1>
<h1>{{ $habilidad->id_ocupaciones }}</h1>
<h1>{{ $habilidad->nombre_ocupacion }}</h1>
@endsection