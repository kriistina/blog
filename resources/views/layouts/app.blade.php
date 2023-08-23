<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
 <!-- Scripts -->
 <script src="{{ asset('js/app.js') }}" defer></script>
    
    <script src="{{ asset('frontend/js/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontend/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{ asset('frontend/js/bootstrap/jquery/jquery-2.2.4.min.js')}}"></script>
    <script src="{{ asset('frontend/js/bootstrap/plugins/plugins.js')}}"></script>
    <script src="{{ asset('frontend/js/active.js')}}"></script>    
    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.x/css/materialdesignicons.min.css" rel="stylesheet">


    <!-- Template Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/classy.nav.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.min.css')}}">


    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
 
   
    <!-- Favicon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" href="img/core-img/favicon.ico">
    <style>
        .logo-link {
            width: 80px;
            height: auto;
        }
    </style>

</head>

<body>
    <div id="app">
        <v-app>
        <header class="header-area">
            <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark">
                <div class="container">
                    <a class="navbar-brand logo-link" href="{{ url('/') }}">
                        <img src="/img/logo.webp" width="200px">
                        <span>
                            <a class="logo-name" href="{{ url('/') }}">TRAVEL BLOG</a>
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('naslovnica') }}">NASLOVNICA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('blog') }}">BLOG</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('destinacije') }}">DESTINACIJE</a>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('kontakt') }}">KONTAKT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('galerija') }}">GALERIJA</a>
                            </li>
                            @if(Auth::check())
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('dodajClanak') }}">DODAJ CLANAK</a>
                                </li>
                            @endif
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>


    </header>
            <div>
                @yield('content')
            </div>
            <my-footer></my-footer>
        </v-app>
    </div>


</body>

</html>