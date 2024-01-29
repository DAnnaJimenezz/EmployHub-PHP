@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('/css/Login/login.css') }}">
    <section class="Formulario">
        <content class="login">
            <head class="user">
                <h1 class="title-login">LOGIN</h1>
                <img src="{{ asset('img/LOGIN.png') }}" alt="user" width="300px" height="300px" />
            </head>
            <content class="form">
                <form action="{{ route('login.auth') }}" method="POST">
                    @csrf
                    @if(session()->has('message'))
                    <p style="color:red;">{{ session('message') }}</p>
                    @endif
                    <br />
                    <article class="nombre_usuario">
                        <label for="nombre_usuario">
                            <img src="{{ asset('img/USERNAME.png') }}" alt="Imagen" width="40px" height="40px" />
                            <input type="text" name="nombre_usuario" placeholder="| Nombre Usuario" required value="{{ old('nombre_usuario') }}" />
                            @error('nombre_usuario')
                                <h5>{{ $message }}</h5>
                            @enderror
                        </label>
                    </article>
                    <br />

                    <article class="contraseña">
                        <label for="contraseña">
                            <img src="{{ asset('img/PASSWORD.png') }}" alt="Imagen" width="40px" height="40px" />
                            <input type="password" name="contraseña" placeholder="| Contraseña" required value="{{ old('contraseña') }}" />
                            @error('contraseña')
                                <h5>{{ $message }}</h5>
                            @enderror
                        </label>
                    </article>
                    <br />
                    <article class="submit">
                            <button type="submit" name="login" placeholder="submit" value="login">Login</button>
                    </article>
                </form>
            </content>
        </content>
    </section>
@endsection