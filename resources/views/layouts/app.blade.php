<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="Kunnec is everything all in one. We value your privacy, freedom of speech and your data belongs to you. We don't sell your data to third parties.
    ">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- GOOGLE Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107694954-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-107694954-1');
    </script>
    
    <!-- GOOGLE TRANSLATE -->
    <script type="text/javascript">
        function googleTranslateElementInit() { 
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css">
    @yield('additional-css')
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('landing') }}">
            <div class="navbar_brand">
            </div>
            <div class="text-white">
                Kunnec
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"  id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mb-lg-2">
                <li class="nav-item active">
                    <a class="nav-link" href="#"> <span class="sr-only"></span></a>
                </li>
            </ul>
        </div>
        <div id="google_translate_element">
        </div>
        <div class="form-inline my-2 my-lg-0">
            <form action="{{ route('login') }}" method="post">
                {{ csrf_field() }}
                <input class="form-control mr-sm-2" type="search" placeholder="Username Or Email" name="email" value="{{ old('email') }}" required autofocus>
                <input class="form-control mr-sm-2 my-2" type="password" placeholder="Password"  name="password" required>
                <button class="btn btn-danger mr-2" type="submit">Sign In</button>
            </form>
            @if(Request::segment(1) !='register')
                <a href="{{ url('/register') }}"><button class="btn btn-warning mr-2" type="button"><font color="#FFFFFF">Sign Up</font></button>
                </a>
            @endif
                <button class="terms" type="button"><a href="{{ route('password.request') }}"><font color="FFFFFF">Forgot Password?</font></a></button>
        </div>

    </nav><!-- End of Navbar-->
    @yield('content')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('additional-js')
</body>
</html>
