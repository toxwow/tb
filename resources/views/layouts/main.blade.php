<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Anna Taborska @yield('title')</title>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" async></script>
    <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    @stack('css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('test/owl.carousel/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('test/owl.carousel/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">
    <div class="img-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-3">
                    <a href="{{'/'}}"><img src="{{ asset('/img/logo.jpg')}}" style="width: 300px;"  alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-md navbar-light ">
        <div class="container">

            <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mx-auto text-center  justify-content-between w-100">
                    <li class="nav-item"><a href="{{'/o-nas'}}" class="nav-link {{ request()->is('o-nas') ? 'active' : '' }}">O NAS</a></li>
                    <li class="nav-item nav-link">OFERTA</li>
                    <li class="nav-item"><a href="{{ route('cennik') }}" class="nav-link {{ request()->is('cennik') ? 'active' : '' }}">CENNIK</a></li>
                    <li class="nav-item nav-link">KONTAKT</li>
                    <li class="nav-item"><a href="{{'/posts'}}" class="nav-link {{ request()->is('posts*') ? 'active' : '' }}">AKTUALNOŚCI</a></li>
                    <li class="nav-item nav-link">GALERIA</li>
                </ul>


            </div>
        </div>
    </nav>

    <div>
        @yield('top')
    </div>

    <main class="py-4">
        @yield('content')
    </main>
    <div class="fb-customerchat" page_id="<562981907156507>">
    </div>

    <footer style="margin-top: 75px;">
        <div style="width: 100%; height: 40px; background-color: #dff2e4"></div>
    </footer>
</div>

@stack('script')

<script src="{{asset('test/jquery/dist/jquery.js')}}"></script>
<script src="{{asset('test/owl.carousel/dist/owl.carousel.min.js')}}"></script>

<script>
    $('.owl-carousel').owlCarousel({
        center: true,
        items:3,
        loop:true,
        margin:30,
        responsive:{
            600:{
                items:3
            }
        }
    })
</script>
</body>
</html>
