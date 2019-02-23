@extends('layouts.main')
@section('title', '')

@push('css')
    <style>

        div.wrapper-img{
            position: relative;
        }

        div.bg-effect{
            position: absolute;
            width: 100%;
            height: 100%;
            top:0;
            left: 0;
            background-image: url("{{asset('img/icons/search.png')}}");
            background-size: 25px;
            background-position: center;
            background-repeat: no-repeat;
            background-color: rgba(0, 0, 0, 0.4);
            opacity: 0;
            transition: opacity 0.2s ease-in-out;
        }

        div.wrapper-img:hover .bg-effect {
            opacity: 1;
        }

    </style>
@endpush

@section('top')
    <div class="line"></div>
@endsection


@section('content')

    @component('components.Titles.simple-title' , ['colorStatus' => 'no']))
    @slot('title')
        Galeria
    @endslot
    @slot('description')
    @endslot
    @endcomponent
    <div class="container">
        <div class="row">
            @foreach($photo as $item)
                <div class="col-sm-6 col-md-3">
                    <a href="{{ asset('img/slider/'.$item->path) }}" data-lightbox="image-1" data-title="{{$item->name}}">
                        <div class="wrapper-img">
                            <img src="{{ asset('img/slider/'.$item->path) }}" alt="" style="width: 100%;">
                            <div class="bg-effect"></div>
                        </div>
                    </a>
                </div>
                @endforeach
        </div>
    </div>


@endsection

@push('script')

    <script>
        lightbox.option({
            alwaysShowNavOnTouchDevices: true,
        })
    </script>

@endpush