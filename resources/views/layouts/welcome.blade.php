<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    @stack('css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <style>

        .wrapper p {
            font-size: 1.1em;
            font-weight: 300;
            line-height: 1.7em;
            color: black;
        }

        .wrapper a, a:hover, a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }

        .wrapper {
            display: flex;
            align-items: stretch;
        }

        #sidebar {
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            z-index: 999;
            background: #252525;
            color: #fff;
            transition: all 0.3s;

        }

        #sidebar .sidebar-header {
            padding: 20px;
            background: #191919;
            text-align: center;
            font-size: 1.2rem;
        }

        #sidebar ul.components {
            padding: 20px 0;
        }

        #sidebar ul.components > li {
            border-bottom: 1px solid #2d2c2c;
        }

        #sidebar ul.components > li.logout {
            border-bottom: 1px solid #2d2c2c;
            background-color: #5aaf9c;
        }

        #sidebar ul.components > li.logout a:hover {
            background-color: #3f7e6c;
        }

        #sidebar ul p {
            color: #fff;
            padding: 10px;
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
        }
        #sidebar ul li a:hover {
            color: white;
            background: #191919;
        }

        #sidebar.active {
            margin-left: -250px;
        }

        a[data-toggle="collapse"] {
            position: relative;
        }

        #sidebar ul li.active > a, a[aria-expanded="true"] {
            color: #fff;
            background: #191919;
        }
        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #191919;
        }

        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }

        p {
            color: black;
        }

        #content {
            width: 100%;
            padding: 20px;
            min-height: 100vh;
            transition: all 0.3s;
        }

    </style>

</head>
<body>
<div id="app">

    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="{{route('home')}}" style="">annataborska.pl</a>
            </div>

            <ul class="list-unstyled components">
                <p>Witaj {{Auth::user()->name}}</p>
                <li class="{{ request()->is('admin') ? 'active' : '' }}">
                    <a href="{{route('admin')}}"><i class="fas fa-home mr-2"></i>Panel Główny</a>

                </li>
                <li class="{{ request()->is('admin/dodaj-kategorie', 'admin/kategorie*') ? 'active' : '' }}" >
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-book mr-2"></i>Kategorie</a>
                    <ul class="collapse list-unstyled {{ request()->is('admin/dodaj-kategorie', 'admin/kategorie*') ? 'in show' : '' }}" id="homeSubmenu">
                        <li>
                            <a href="{{route('addNewCategory')}}">Dodaj kategorie</a>
                        </li>
                        <li>
                            <a href="{{route('categoryAdmin')}}">Edytuj kategorie</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ request()->is('admin/dodaj-podkategorie', 'admin/podkategorie*') ? 'active' : '' }}">
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-bookmark mr-2"></i>Podkategorie</a>
                    <ul class="collapse list-unstyled {{ request()->is('admin/dodaj-podkategorie', 'admin/podkategorie*') ? 'in show' : '' }}" id="pageSubmenu">
                        <li>
                            <a href="{{route('addNewSubcategory')}}">Dodaj podkategorie</a>
                        </li>
                        <li>
                            <a href="{{route('subCategoryAdmin')}}">Edytuj kategorie</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fas fa-dollar-sign mr-2"></i>Cennik</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-images mr-2"></i>Galeria</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-user mr-2"></i>Dodaj użytkownika</a>
                </li>
                <li class="logout">
                    <a href="{{route('logoutUser')}}"><i class="fas fa-sign-out-alt mr-2"></i>Wyloguj</a>
                </li>
            </ul>
        </nav>
        <div id="content" style="margin-left: 250px;">
            <div class="container" style="margin-top: 50px">
                @yield('content')
            </div>
        </div>

    </div>
</div>


<script src="{{asset('test/jquery/dist/jquery.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<script>
    $(document).ready(function () {

        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#sidebarCollapse').on('click', function () {
            // open or close navbar
            $('#sidebar').toggleClass('active');
            // close dropdowns
            $('.collapse.in').toggleClass('in');
            // and also adjust aria-expanded attributes we use for the open/closed arrows
            // in our CSS
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });

    });
</script>
@stack('script')

</body>
</html>

