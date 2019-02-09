@extends('layouts.main')
@section('title', '')

@push('css')
    <style>
        div.wrapper-category-block{
            height: 205px;
            width: 80%;
            overflow: hidden;
        }

        div.wrapper-img{
            background-position: left top;
            background-repeat: no-repeat;
            background-size: contain;
            width: 100%;
            height: 100%;
            transition: all 0.5s ease-in-out;
        }

        .offert-link:hover .wrapper-img {
            transform: scale(1.1);
        }

        div.wrapper-category-block .wrapper-link{
            position: absolute;
            width: 50%;
            height: 60px;
            background-color: rgba(238, 237, 234, 0.85);
            bottom: 10px;
            text-align: center;
            line-height: 60px;
            font-weight: 600;
            color: #646464;
            right: 0;
            transition: all 0.5s ease-in-out;
        }

        .offert-link:hover .wrapper-link {
            background-color: rgba(223, 242, 228, 0.85);
        }

        div.wrapper-category-block a{
            text-decoration: none;
            color: #646464;
        }


    </style>
@endpush
@section('top')
    @component('components.Top.single')
    @endcomponent
@endsection


@section('content')

    @component('components.Titles.simple-title' , ['colorStatus' => 'no']))
        @slot('title')
            oferta
        @endslot
        @slot('description')
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum iure, iusto quisquam quo saepe vitae.
        @endslot
    @endcomponent


    <div class="container">
        <div class="row">
            @foreach($groupeService as $key=>$service)
                @if($key % 2)
                    <div class="col-5 offset-md-2" style="position: relative; margin-bottom: 50px;">
                        <a class='offert-link' href="/oferta/{{$service->alias}}">
                            <div class="wrapper-category-block">
                                <div class="wrapper-img" style="background-image: url('img/category/{{$service->image}}');"></div>
                                <div class="wrapper-link">
                                    {{$service->name}}
                                </div>
                            </div>
                        </a>
                    </div>
                @else
                    <div class="col-5" style="position: relative; margin-bottom: 50px;">
                        <a class='offert-link' href="/oferta/{{$service->alias}}">
                            <div class="wrapper-category-block">
                                <div class="wrapper-img" style="background-image: url('img/category/{{$service->image}}');"></div>
                                <div class="wrapper-link">
                                    {{$service->name}}
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
                @foreach($groupeService as $key=>$service)
                    @if($key % 2)
                        <div class="col-5 offset-md-2" style="position: relative; margin-bottom: 50px;">
                            <a class='offert-link' href="/oferta/{{$service->alias}}">
                                <div class="wrapper-category-block">
                                    <div class="wrapper-img" style="background-image: url('img/category/{{$service->image}}');"></div>
                                    <div class="wrapper-link">
                                        {{$service->name}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="col-5 " style="position: relative; margin-bottom: 50px;">
                            <a class='offert-link' href="/oferta/{{$service->alias}}">
                                <div class="wrapper-category-block">
                                    <div class="wrapper-img" style="background-image: url('img/category/{{$service->image}}');"></div>
                                    <div class="wrapper-link">
                                        {{$service->name}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
        </div>
    </div>
    @component('components.Titles.simple-title' , ['colorStatus' => 'yes']))
    @slot('title')
        cennik
    @endslot
    @slot('description')@endslot
    @endcomponent

@endsection
