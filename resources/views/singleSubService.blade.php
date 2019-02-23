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

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-12 col-md-8">
                <p class="titleServiceGroupe"><a href="{{route('test', ['id' => $serviceGroupe[0]->alias])}}">{{$serviceGroupe[0]->name}}</a></p>
                <h1 class="titleSingleService">{{$service[0]->sub_service_name}}</h1>
                <div class="wrapper-opis" style="text-align: justify">{!!  $service[0]->description !!}</div>
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

    <br>

@endsection
