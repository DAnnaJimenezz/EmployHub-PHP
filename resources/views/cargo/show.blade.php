@extends('layouts.app')

@section('content')

<a href="{{ route('index.cargo')}}">Back</a>
<h1>{{ $cargo->nombre_cargo }}</h1>
<h1>{{ $cargo->direccion }}</h1>
<h1>{{ $cargo->telefono }}</h1>
@endsection