<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" />
    <title>{{ config('app.name', 'Laravel') }} </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.rawgit.com/alertifyjs/alertify.js/v1.0.10/dist/js/alertify.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidenav.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/metisMenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}" style="color:black">
                    <i class="fa fa-futbol-o" aria-hidden="true" style="font-size:22px"></i>
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>
          
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @guest
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Ingreso') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a></li>
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </li>
                  @endguest
                </ul>
            </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="nav-side-menu">
                <div class="brand">MENU PRINCIPAL</div>
                <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
                <div class="menu-list">
                    <ul id="menu-content" class="menu-content collapse out">
          
                        <li data-toggle="collapse" data-target="#user" class="collapsed active">
                            <a href="#"><i class="fa fa-user fa-lg"></i> USUARIOS <span class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="user">
                            <li style="display:block"><a href="{{ route('user.create') }}">CREAR</a></li>
                            <li style="display:block"><a href="" >CONSULTAR</a></li>
                        </ul>

                        <li data-toggle="collapse" data-target="#jugadores" class="collapsed">
                            <a href="#"><i class="fa fa-futbol-o"></i> JUGADORES <span class="arrow"></span></a>
                        </li>
                            <ul class="sub-menu collapse" id="jugadores">
                            <li style="display:block"><a href="{{ route('jugadores.create') }}">CREAR</a></li>
                            <li style="display:block"><a href="{{ route('jugadores.index') }}" >CONSULTAR</a></li>
                        </ul>

                        <li data-toggle="collapse" data-target="#paises" class="collapsed">
                            <a href="#"><i class="fa fa-flag"></i> PAISES <span class="arrow"></span></a>
                        </li>
                            <ul class="sub-menu collapse" id="paises">
                            <li style="display:block"><a href="{{ route('paises.create') }}">CREAR</a></li>
                            <li style="display:block"><a href="{{ route('paises.index') }}" >CONSULTAR</a></li>
                        </ul>

                        <li data-toggle="collapse" data-target="#ciudades" class="collapsed">
                            <a href="#"><i class="fa fa-building"></i> CIUDADES <span class="arrow"></span></a>
                        </li>
                            <ul class="sub-menu collapse" id="ciudades">
                            <li style="display:block"><a href="{{ route('ciudades.create') }}">CREAR</a></li>
                            <li style="display:block"><a href="{{ route('ciudades.index') }}" >CONSULTAR</a></li>
                        </ul>

                        <li data-toggle="collapse" data-target="#empresas" class="collapsed">
                            <a href="#"><i class="fa fa-briefcase"></i> Empresas <span class="arrow"></span></a>
                        </li>
                            <ul class="sub-menu collapse" id="empresas">
                            <li style="display:block"><a href="{{ route('empresas.create') }}">CREAR</a></li>
                            <li style="display:block"><a href="{{ route('empresas.index') }}" >CONSULTAR</a></li>
                        </ul>

                        <li data-toggle="collapse" data-target="#sucursales" class="collapsed">
                            <a href="#"><i class="fa fa-cubes"></i> Sucursales <span class="arrow"></span></a>
                        </li>
                            <ul class="sub-menu collapse" id="sucursales">
                            <li style="display:block"><a href="{{ route('sucursales.create') }}">CREAR</a></li>
                            <li style="display:block"><a href="{{ route('sucursales.index') }}" >CONSULTAR</a></li>
                        </ul>

                    </ul>
                </div>
            </div>
              
            <div style="top: 40px;" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                @yield('content')
            </div>

            <footer class="footer">

                <span class="footer-brand">
                    <strong style="color:#DB3149">Russia</strong> 2018
                </span>
                <p class="no-margin"> © 2018 <strong>Heart Machine </strong>. ALL Rights Reserved.</p>
                <img style="float:right" src="{{ asset('img/heart-machine-logo.png') }}" alt="heart-machine-logo" width="25" height="25">
            </footer>
        </div>
    </div>

    {{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>