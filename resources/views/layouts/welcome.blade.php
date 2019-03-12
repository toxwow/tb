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

</head>
<body>
<div id="app">
        <div style="width: 100%; background-color: #1b1e21">
            <div class="d-flex" style="justify-content: space-between; align-items: center;">
                <div>
                    <p style="margin: 0; margin-left: 40px;"><a href="{{route('admin')}}">Panel głowny</a></p>
                </div>
                <div style="color: white; padding: 10px 0;  margin-right: 20px; display: flex; justify-content: flex-end">
                    <p style="font-weight: 600; margin: 0;">Witaj {{Auth::user()->name}}</p>
                    <p style="margin: 0; margin: 0 30px;"> <a href="{{route('home')}}">przejdź do strony</a></p>
                    <p style="margin: 0"><a href="{{route('logoutUser')}}">Wyloguj</a></p>
                </div>
            </div>

        </div>

        <div class="container" style="margin-top: 100px">

            @yield('content')


</div>


<script src="{{asset('test/jquery/dist/jquery.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>
@stack('script')

</body>
</html>

