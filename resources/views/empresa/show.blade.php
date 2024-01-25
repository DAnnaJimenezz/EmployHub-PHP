@extends('layouts.app')

@section('content')

<a href="{{ route('index.empresa')}}">Volver</a>
<h1>{{ $empresa->nombre_empresa }}</h1>
<h1>{{ $empresa->representante_legal }}</h1>
<h1>{{ $empresa->tipo_empresa }}</h1>
<h1>{{ $empresa->NIT }}</h1>
<h1>{{ $empresa->numero_trabajadores }}</h1>
<h1>{{ $empresa->correo_representante_legal }}</h1>
<h1>{{ $empresa->naturaleza }}</h1>
<h1>{{ $empresa->correo_empresa }}</h1>
<h1>{{ $empresa->telefono_empresa }}</h1>
<h1>{{ $empresa->telefono_alternativo_empresa }}</h1>
<h1>{{ $empresa->gerente_recursos_humanos }}</h1>
<h1>{{ $empresa->telefono_gerente }}</h1>
<h1>{{ $empresa->telefono_alternativo_2_gerente }}</h1>
<h1>{{ $empresa->correo_gerente }}</h1>

@endsection