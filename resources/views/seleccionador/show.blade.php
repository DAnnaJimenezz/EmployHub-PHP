@extends('layouts.app')

@section('content')

<a href="{{ route('seleccionador')}}">Regresar</a>
<h1>{{ $seleccionador->numero_documento_seleccionador }}</h1>
<h1>{{ $seleccionador->tipo_documento_seleccionador }}</h1>
<h1>{{ $seleccionador->nombre_selector }}</h1>
<h1>{{ $seleccionador->telefono_selector }}</h1>
<h1>{{ $seleccionador->correo_electronico_selector }}</h1>
@endsection