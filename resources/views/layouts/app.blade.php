<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link rel="stylesheet" href="{{ asset('css/layouts.css') }}">
</head>
<body>
    <header>
        <section class="interior">
            <a href="" class="logo"><img src="{{ asset('img/Logo_EmplyHub.png') }}" alt="Emplay_Hub"></a>
            <input type="checkbox" id="icon-menu"/>
            <label for="icon-menu">
                <img src="{{ asset('img/menu.png') }}" class="menu-icono" alt="">
            </label>
            <nav class="navegacion">
                <ul class="menu">
                    <li><a class="activa" href="{{ route('layouts') }}">Home</a></li>
                    <li><a class="sobreNosotros" href="{{ route('aboutUs') }}">About Us</a></li>
                    <li><a class="terminos" href="{{ route('termsConditions') }}">Terms and Conditions</a></li>            
                </ul>
            </nav>

            <div id="barra-superior">
                @if (auth()->user())
                <p class="mensaje-bienvenida">Bienvenid@ {{ auth()->user()->username }}</p>
                <ul class="menu-usuario">
                    @if (session('id_user_types') == 1)
                        <li><a href="{{ route('headerAdmin')}}">Tipo de Usuario Admin</a></li>
                        
                        @elseif (auth()->user()->id_user_types == 2)
                        <li><a href="{{ route('headerSeleccionador')}}">Tipo de Usuario Seleccionador</a></li>

                        @elseif (auth()->user()->id_user_types == 3)
                        <li><a href="{{ route('headerReclutador')}}">Tipo de Usuario Reclutador</a></li>

                        @elseif (auth()->user()->id_user_types == 4)
                        <li><a href= "{{ route('headerCandidato')}}">Tipo de Usuario Candidato</a></li>

                        @elseif (auth()->user()->id_user_types == 5)
                        <li><a href="{{ route('headerEmpresa')}}" >Tipo de Usuario Empresa</a><li>
                            
                        @endif
                    </ul>
                    <form class="form-logout" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button>Cerrar sesión</button>
                    </form>
                @else
                    <ul class="login">
                        <li><a href="{{ route('register') }}">Registrarse</a></li>
                        <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                    </ul>
                @endif
            </div>
        </section>
    </header>

    <br>
    @yield('content')

    <footer>
        <section class="redes-sociales">
            <a href="https://www.facebook.com/dannamilena.jimenezcastro" target="_blank" class="icono-redesSociales"></a>
            <a href="https://www.instagram.com/jimenezdanna638/" target="_blank" class="icono-redesSociales"></a>
            <a href="https://github.com/CristianLeon01/ProyectoRH-3erTri" target="_blank" class="icono-redesSociales"></a>
            <a href="https://mail.google.com/mail/u/3/#all" target="_blank" class="icono-redesSociales"></a>
        </section>
        <ul class="menu-contenedor">    
            <li class="menu-item">Cristian León</li>
            <li class="menu-item">Diego Carranza</li>
            <li class="menu-item">Danna Jimenez</li>
        </ul>
        <span class="copyright"> &copy; 2023-2024, ADSO </span>
    </footer>
</body>
</html>
