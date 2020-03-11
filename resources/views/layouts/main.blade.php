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
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    @stack('css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('test/owl.carousel/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('test/owl.carousel/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    {{--<link href="{{ asset('test/lightbox/css/lightbox.css') }}" rel="stylesheet">--}}

<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136185296-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-136185296-1');
    </script>


</head>
<body>
<div id="app">
    @if (Auth::check())
        <div style="width: 100%; background-color: #1b1e21">
            <div style="color: white; padding: 10px 0;  margin-right: 20px; display: flex; justify-content: flex-end">
                <p style="font-weight: 600; margin: 0;">Witaj {{Auth::user()->name}}</p>
                <p style="margin: 0; margin: 0 30px;"> <a href="{{route('admin')}}">przejdź do panelu</a></p>
                <p style="margin: 0"><a href="{{route('logoutUser')}}">Wyloguj</a></p>
            </div>
        </div>

    @else

    @endif
    <div class="img-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-3" style="position: relative">
                    <a href="{{route('home')}}"><img src="{{ asset('/img/logo.jpg')}}" style="width: 300px;"  alt=""></a>
                    <div class="social-wrapper" style="position: absolute; right: 0px; top: 20px; display: flex;">
                        <a href="https://www.facebook.com/StudioUrodyAnnaTaborska" target="_blank"><img src="{{asset('/img/icons/facebook.png')}}" alt="" style="width: 22px;"></a>
                        <a href="https://www.instagram.com/annataborska.studio/" target="_blank"><img src="{{asset('/img/icons/instagram.png')}}" alt="" style="width: 22px; margin-left: 15px;"></a>
                    </div>
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
                    <li class="nav-item"><a href="{{ route('o-nas') }}" class="nav-link {{ request()->is('o-nas') ? 'active' : '' }}">O NAS</a></li>
                    <li class="nav-item"><a href="{{route('oferta')}}" class="nav-link {{ request()->is('oferta*') ? 'active' : '' }}">OFERTA</a></li>
                    <li class="nav-item"><a href="{{ route('cennik') }}" class="nav-link {{ request()->is('cennik') ? 'active' : '' }}">CENNIK</a></li>
                    {{--<li class="nav-item"><a href="{{'/posts'}}" class="nav-link disabled {{ request()->is('posts*') ? 'active' : '' }}">PODSŁUCHANE KONSULTACJE</a></li>--}}
                    <li class="nav-item"><a href="{{ route('galeria') }}" class="nav-link {{ request()->is('galeria') ? 'active' : '' }}">GALERIA</a></li>
                    <li class="nav-item"><a href="{{ route('kontakt') }}" class="nav-link {{ request()->is('kontakt') ? 'active' : '' }}">KONTAKT</a></li></li>
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

    <footer style="margin-top: 75px;">
        <div style="width: 100%; height: 40px; background-color: #dff2e4"></div>
    </footer>
</div>



<script src="{{asset('test/jquery/dist/jquery.js')}}"></script>
<script src="{{asset('test/owl.carousel/dist/owl.carousel.min.js')}}"></script>

<script>


    $('.owl-carousel').owlCarousel({
        center: true,
        items:3,
        loop:true,
        margin:30,
        responsive:{
            400:{
                items:2
            },
            800:{
                items: 3
            }
        }
    });
</script>

<script>

    var chatDiv = document.createElement('div');
    chatDiv.className = 'fb-customerchat';
    chatDiv.setAttribute('page_id', '130125320377037');
    chatDiv.setAttribute('theme_color', '#5aaf9c');
    chatDiv.setAttribute('greeting_dialog_display', 'hide');
    chatDiv.setAttribute('logged_in_greeting', 'Witaj, jak możemy Ci pomóc?');
    chatDiv.setAttribute('logged_out_greeting', 'Witaj, jak możemy Ci pomóc?');
    document.body.appendChild(chatDiv);

    window.fbAsyncInit = function() {
        FB.init({
            appId            : '850652791742367',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v3.2'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/pl_PL/sdk/xfbml.customerchat.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
@stack('script')
</body>
</html>

