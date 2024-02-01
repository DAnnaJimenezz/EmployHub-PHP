@extends('layouts.app')

@section('content')

<a href="{{ route('user')}}">Back</a>
<h1>{{ $user->username }}</h1>
<h1>{{ $user->correo_electronico }}</h1>
<h1>{{ $user->id_tipo_usuario }}</h1>
@endsection