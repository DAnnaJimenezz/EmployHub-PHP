@extends('layouts.app')

@section('content')

<a href="{{ route('index.conocimiento')}}">Back</a>
<h1>{{ $conocimiento->nombre_conocimiento }}</h1>
<h1>{{ $conocimiento->descripcion_conocimiento }}</h1>
<h1>{{ $conocimiento->id_ocupaciones }}</h1>
<h1>{{ $conocimiento->nombre_ocupacion }}</h1>
@endsection