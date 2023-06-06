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
    <div class="delicious-main-menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light classy-navbar justify-content-between" id="deliciousNav">
                <a class="nav-brand logo-link" href="{{ url('/') }}"><img src="img/logo.png" alt=""></a>


                <div class="collapse navbar-collapse classynav" id="navbarText">
                   
                   
                    </div>
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('naslovnica') }}">NASLOVNICA</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">BLOG</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('destinacije') }}">DESTINACIJE</a></li> 
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">O NAMA</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('kontakt') }}">KONTAKT</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('galerija') }}">GALERIJA</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('dodajClanak') }}">DODAJ CLANAK</a></li>
                        
                


                        <!-- Authentication Links -->
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
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
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
            </nav>
        </div>
    </header>
            <div>
                @yield('content')
            </div>
        </v-app>
    </div>


</body>

</html>