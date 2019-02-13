@extends('layouts.main')
@section('title', '- '.$service[0]->sub_service_name)

@push('css')
    <style>
        .wrapper-opis > p.title{
            margin-top: 20px;
            font-size: 1.2rem;
        }
        h1.titleSingleService{
            font-weight: 300;
            text-transform: uppercase;
        }
        p.titleServiceGroupe{
            margin-bottom: 5px;
            color: #5aaf9c;
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
            background-color: #dff2e4;
            margin-bottom: 5px;
        }

        div.menu-item p a {
            text-decoration: none;
            color: #747474;
        }

        div.line{
            width: 100%;
            height: 2px;
            background-image: -moz-linear-gradient( 0deg, rgb(195,222,202) 0%, rgb(223,242,228) 50%, rgb(188,223,214) 100%);
            background-image: -webkit-linear-gradient( 0deg, rgb(195,222,202) 0%, rgb(223,242,228) 50%, rgb(188,223,214) 100%);
            background-image: -ms-linear-gradient( 0deg, rgb(195,222,202) 0%, rgb(223,242,228) 50%, rgb(188,223,214) 100%);
        }
    </style>
@endpush

@section('top')
    <div class="line"></div>
@endsection

@section('content')

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-8">
                <p class="titleServiceGroupe">{{$serviceGroupe[0]->name}}</p>
                <h1 class="titleSingleService">{{$service[0]->sub_service_name}}</h1>
                <div class="wrapper-opis" style="text-align: justify">{!!  $service[0]->description !!}</div>
            </div>
            <div class="col-md-3 offset-md-1">
                <div class="menu-rest-wrapper">
                    <h4>Nasza oferta</h4>
                    <div class="menu-content">
                        @foreach($serviceAll as $item)
                        <div class='menu-item'>
                            <p style="padding: 20px 10px; margin: 0;"><a href="{{route('test', ['id' => $item->alias])}}">{{$item->name}}</a></p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>

    <br>

@endsection
