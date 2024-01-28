@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/Relations/createRelation.css') }}">
<a href="{{ route ('relation') }}"> Regresar</a>

<section class="create">
    <h1 class="title">Edita tu <span>Relación</span></h1>
    <form action="{{ route('update.relation', $relation->id) }}" method="POST">
        @method('PUT')
        @csrf

        <label>Escribe el nombre de la ocupación relacionada:</label>
        <input name="name_related_occupation" type="text" required value="{{ $relation->name_related_occupation }}"><br><br>

        <center><button type="submit" class="create-application-button">Actualizar</button></center>
    </form>
</section>
@endsection