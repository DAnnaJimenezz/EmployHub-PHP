@extends('layouts.app')
@section('content')

<a href="{{ route ('usuario') }}">Regresar</a>
<link rel="stylesheet" href="{{ asset('css/createUser.css') }}">

<section class="create-usuario" style="width: 30%; margin-left: 35%">
    <h1 class="titleUser">Crea tu Usuario</h1>
    <form action="{{ route('usuario.update', ['usuario' => $usuario->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputUserName" class="form-label">Nombre de Usuario</label>
            <input type="text" class="form-control" name="username" value="{{old('username')}}" required>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label">Correo Electrónico</label>
            <input type="correo_electronico" class="form-control" name="correo_electronico" value="{{old('correo_electronico')}}" required>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="password" value="{{old('password')}}" required>
        </div>

        <button type="submit" value="Actualizar" class="btn btn-primary">Actualizar</button>
    </form>
</section>
@endsection