@extends('layouts.main')
@section('title', '')

@push('css')
    <style>
        div.breadcrumb-wrapper{
            margin-bottom: 10px;
            color: #A7A6A4;
        }

        div.breadcrumb-wrapper > a{
            color: #A7A6A4;
            text-decoration: none;
            font-weight: 300;
        }

        div.breadcrumb-wrapper > a.active{
            color: #4CA894;
        }

        div.breadcrumb-wrapper > a:hover{
            color: #4CA894;
        }

        p.main-description{
            color: #707070;
            margin-top: 20px;
            font-weight: 300;
        }

        div.img-wrapper-category{
            display: flex;
            justify-content: flex-end;
            align-items: center;
            height: 100%;
            width: 100%;
        }

        div.img-wrapper-category > div {
            width: 90%;
            position: relative;
            height: auto;
        }

        div.img-wrapper-category > div > div.img-effect {
            position: absolute;
            height: 100%;
            width: 100%;
            background-color: #4CA894;
            top:10px;
            left: -10px;
            opacity: 0.25;
            z-index: -1;
        }

        div.img-wrapper-category > div > img.img-category{
            width: 100%;
            height: 100%;
        }

        div.wrapper-box{
            background: #FFFFFF;
            box-shadow: 0 0 25px 5px #EFEFEF;
            border-radius: 5px;
            padding: 40px 20px;
            margin: 0 auto;
            text-align: center;
            color: inherit;
            transition: all 0.25s ease-out;
        }

        div.wrapper-box:hover{
            box-shadow: 0 0 25px 5px #DEF2E4;
            color: #51AB97
        }

    </style>
@endpush

@section('top')
    <div class="line"></div>
@endsection


@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-5">
                <div class="breadcrumb-wrapper">
                    <a href="{{route('home')}}">Home</a> -
                    <a href="{{route('oferta')}}">Oferta</a> -
                    <a class="active" href="{{route('test', ['id' => $category[0]->alias])}}">{{$category[0]->name}}</a>
                </div>
                <h4>{{$category[0]->name}}</h4>
                <p class="text-justify main-description">{{$category[0]->main_description}}</p>
            </div>
            <div class="col-12 col-md-6 offset-md-1">
                <div class="img-wrapper-category">
                    <div>

                        <img class="img-category" src="{{asset('img/category/'.$category[0]->image)}}" alt="">
                        <div class="img-effect"></div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    @component('components.Titles.simple-title' , ['colorStatus' => 'no']))
    @slot('title')
        oferta
    @endslot
    @slot('description')@endslot
    @endcomponent

    <div class="container">
            @foreach($singleService as $key => $item)
                @if($key % 2 ==0)
                    <div class="row">
                @endif
                        <div class="col">
                            <a href="{{route('subcategory', ['id' => $category[0]->alias ,'id2' => $item->sub_service_alias])}}" style="color: inherit; text-decoration: none;">
                                <div class="wrapper-box">
                                    {{$item->sub_service_name}}
                                </div>
                            </a>

                        </div>
                @if($key % 2 !=0)
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <a href="{{route('cennik')}}">
    @component('components.Titles.simple-title' , ['colorStatus' => 'yes']))
    @slot('title')
        cennik
    @endslot
    @slot('description')@endslot
    @endcomponent
    </a>


@endsection
