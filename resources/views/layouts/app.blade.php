<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('mdb/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('mdb/css/mdb.min.css') }}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{ asset('mdb/css/style.css') }}" rel="stylesheet">

   

    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('mdb/js/jquery.min.js') }}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('mdb/js/popper.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('mdb/js/bootstrap.min.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('mdb/js/mdb.min.js') }}"></script>


    <style>
        .navbar-nav li:hover > ul.dropdown-menu {
            display: block;
        }
        .dropdown-submenu {
            position:relative;
        }
        .dropdown-submenu>.dropdown-menu {
            top:0;
            left:100%;
            margin-top:-6px;
        }
        
        /* rotate caret on hover */
        .dropdown-menu > li > a:hover:after {
            text-decoration: underline;
            transform: rotate(-90deg);
        } 
        

    </style>

</head>
<body>
    <div id="app">
        <!--Navbar -->
        <nav class="mb-1 navbar navbar-expand-lg navbar-light grey lighten-5">
        <a class="navbar-brands" href="{{ url('/') }}" class="y-0">
            <img src="{{ asset('img/logo.png') }}" alt="" height="120px">
        </a>
      
        <div class=" navbar-collapse" id="navbarSupportedContent-333">
            
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link rounded-circle border" href="https://www.facebook.com/Patrimonio-Cultural-de-Latacunga-112804147141494/" target="_blanck">
                        <i class="fab fa-facebook fa-2x"></i>
                    </a>
                </li>
                <li class="nav-item ml-1">
                    <a class="nav-link rounded-circle border" href="https://www.youtube.com/channel/UCvpP-X10j3nRIyKDTixPtEQ?view_as=subscriber" target="_blanck">
                        <i class="fab fa-youtube fa-2x"></i>
                    </a>
                </li>
                <li class="nav-item ml-1">
                    <a class="nav-link rounded-circle border">
                        <i class="fab fa-whatsapp fa-2x"></i>
                    </a>
                </li>
                <li class="nav-item ml-1">
                    <a class="nav-link rounded-circle border">
                        <i class="fab fa-twitter fa-2x"></i>
                    </a>
                </li>

                <li class="nav-item ml-1">
                    <a class="nav-link rounded-circle border">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                </li>
                
                
            </ul>
        </div>
        </nav>
        <!--/.Navbar -->
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @include('layouts.menuPrincipal')

                    <!-- Right Side Of Navbar -->
                     <ul class="navbar-nav ml-auto">
                        
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul> 
                </div>
            </div>
        </nav>

        <main class="py-4">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @yield('content')
        </main>

        <footer class="page-footer font-small text-dark grey lighten-5 ">

            <div class="container">
                <div class="row">
                    <div class="col-md-6 mt-2">
                        <h2><strong>CONTÁCTANOS</strong></h2>
                        <p>Av. Simón Rodríguez s/n Barrio El Ejido, Sector San Felipe.</p>
                        <p>Latacunga - Ecuador.</p>
                        <p>Teléfonos: (593) 03 2252205 / 2252307 / 2252346. Extensión 189</p>
                        <p><a href="" class="text-dark">www.utc.edu.</a></p>
                        <p>
                            <strong>Francisco Ulloa Enríquez</strong>
                            <br>
                            <small>Director del Proyecto Sistema de Gestión del Patrimonio Histórico Cultural de Latacunga</small>
                            <br>
                            <small>francisco.ulloa@utc.edu.ec</small>
                        </p>
                        
                        <p><strong>Enrique Lanas López</strong>
                            <br>
                            <small>Subdirector</small> <br>
                            <small>manuel.lanas@utc.edu.ec</small>
                        </p>
                        
                        
                    </div>
                    <div class="col-md-6 text-right mt-2">
                                
                        <a href="http://www.utc.edu.ec/" target="_blanck">
                            <img src="{{ asset('img/utc.png') }}" alt="" class="img-fluid mt-5 text-right" width="300px;">
                        </a>                        
                        <a href="{{ route('quienesSomos') }}" class="btn btn-link text-dark text-right">
                            <h2>
                                <strong>Investigadores</strong>
                            </h2>
                        </a>

                    </div>
                </div>
            </div>
            <!-- Copyright -->
         
            <!-- Copyright -->
        </footer>


    </div>


    <script>
        (function($){
            $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
              if (!$(this).next().hasClass('show')) {
                $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
              }
              var $subMenu = $(this).next(".dropdown-menu");
              $subMenu.toggleClass('show');
        
              $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                $('.dropdown-submenu .show').removeClass("show");
              });
        
              return false;
            });
        })(jQuery)
    </script>
</body>
</html>
