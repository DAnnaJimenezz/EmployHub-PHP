@extends('layouts.app')

@section('content')
    <section class="Formulario">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <content class="SIGNUP">
            <link rel="stylesheet" href="{{ asset('/css/Register/register.css') }}">
            <head class="user">
                <h1>REGISTRARSE</h1>
                <img src="{{ asset('Img/LOGIN.png') }}" alt="user" width="300px" height="300px" />
            </head>
                <form action="{{ route('usuario.store') }}" method="POST">
                    @csrf
                    <article class="username">
                        <label for="username">
                            <img src="{{ asset('Img/USERNAME.png') }}" alt="Imagen" width="40px" height="40px" />
                            <input type="text" name="username" placeholder="| Nombre Usuario" required value="{{ old('username') }}"/>
                        </label>
                    </article>
                    <br>
                    <article class="id_tipo_usuario">
                        <img src="{{ asset('Img/user-type.png') }}" alt="Imagen" width="30px" height="30px" />| Tipo Usuario
                        <label for="exampleInputEmail" class="id_tipo_usuario"></label>
                        <select class="tipo_usuario" name="id_tipo_usuario" id="">
                        @foreach ($tipo_usuario as $tipo_usuarios)
                        <option value="{{$tipo_usuarios->id}}">{{$tipo_usuarios->nombre_tipo_usuario}}</option>    
                        @endforeach
                        </select>
                    </article> 
                    <br>
                    
                    <article class="correo_electronico">
                        <label for="correo_electronico">
                            <img src="{{ asset('Img/email-icon.png') }}" alt="Imagen" width="30px" height="30px" />
                            <input type="email" name="correo_electronico" placeholder="| Correo Electronico" required value="{{ old('correo_electronico') }}">
                        </label>
                    </article>
                    <br>

                    <article class="password">
                        <label for="password">
                            <img src="{{ asset('Img/PASSWORD.png') }}" alt="Imagen" width="40px" height="40px" />
                            <input type="password" name="password" placeholder="| Contraseña" required value="{{ old('password') }}"/>
                        </label>
                    </article>

                    <br />

                    <article class="submit">
                            <button type="submit" name="submit" placeholder="submit" value="ENVIAR">Sing Up</button>
                    </article>
                </form>
            </content>
        </content>
    </section>
@endsection