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

        div.wrapper-img-gallery{
            display: flex;
            flex-wrap: wrap;
        }

        div.wrapper-img-gallery > div.single-img{
            flex: 1 0 22%; /* explanation below */
            margin: 5px;
            width: calc(100% / 4);
            background-color: blue;
        }

        .wrapper-opis > p.title{
            margin-top: 20px;
            font-size: 1.2rem;
        }
        h1.titleSingleService{
            font-weight: 300;
            text-transform: uppercase;
        }
        p.titleServiceGroupe a{
            margin-bottom: 5px;
            color: #5aaf9c;
            text-decoration: none;
        }

        div.menu-rest-wrapper{
            width: 100%;
        }

        div.menu-content{
            display: flex;
            flex-direction: column;
        }

        div.menu-item{
            width: 100%;
            background-color: rgba(238, 237, 234, 0.85);
            margin-bottom: 5px;
            transition: all 0.5s ease-out;
        }

        div.menu-item:hover{
            background-color: #dff2e4;
            color: #5aaf9c;
        }

        div.menu-content a  {
            text-decoration: none;
            color: #747474;
        }

    </style>
@endpush

@section('top')
    <div class="line"></div>
@endsection


@section('content')

    <div class="container mt-5">
        <div class="row">

            @if($singleService-> isEmpty())
                <div class="container" style="margin-top: 50px;">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            {{--<p class="titleServiceGroupe"><a href="{{route('test', ['id' => $serviceGroupe[0]->alias])}}">{{$serviceGroupe[0]->name}}</a></p>--}}
                            <h1 class="titleSingleService">{{$category[0]->name}}</h1>
                            <div class="wrapper-opis" style="text-align: justify">{!!  $category[0]->main_description !!}</div>

                        </div>
                        <div class="col-12 col-md-4 mt-5">
                            <div class="menu-rest-wrapper">
                                <h4>Nasza oferta</h4>
                                <div class="menu-content">
                                    @foreach($serviceAll as $item)
                                        <a href="{{route('test', ['id' => $item->alias])}}">
                                            <div class='menu-item'>
                                                <p style="padding: 20px 30px; margin: 0;">{{$item->name}}</p>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-12 col-md-5">
                    <div class="breadcrumb-wrapper">
                        <a href="{{route('home')}}">Home</a> -
                        <a href="{{route('oferta')}}">Oferta</a> -
                        <a class="active" href="{{route('test', ['id' => $category[0]->alias])}}">{{$category[0]->name}}</a>
                    </div>
                    <h4>{{$category[0]->name}}</h4>
                    <p class="text-justify main-description">{!! $category[0]->main_description !!}</p>
                </div>
                <div class="col-12 col-md-6 offset-md-1">
                    <div class="img-wrapper-category">
                        <div>

                            <img class="img-category" src="{{asset('img/category/'.$category[0]->image)}}" alt="">
                            <div class="img-effect"></div>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>


    @if($singleService->isEmpty())
    @else

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
                        <div class="col my-2">
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
    @endif
    <a href="{{route('cennik')}}">
    @component('components.Titles.simple-title' , ['colorStatus' => 'yes']))
    @slot('title')
        cennik
    @endslot
    @slot('description')@endslot
    @endcomponent
    </a>

@endsection
