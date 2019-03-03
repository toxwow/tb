@extends('layouts.main')
@section('title', '- Cennik')

@push('css')
    <style>
        h4.title {
            color: #58b09a;
            margin-bottom: 15px;
        }

        td{
            color: #878787;
        }
    </style>
@endpush

@section('top')
    <div class="line"></div>
@endsection

@section('content')

    @component('components.Titles.simple-title' , ['colorStatus' => 'no']))
    @slot('title')
        cennik
    @endslot
    @slot('description')

    @endslot
    @endcomponent

    <div class="container">
        <div class="row">

                @foreach($priceNew as $item)
                    @if(!$item -> phone ->isEmpty())
                    <div class="col-12" style="margin-bottom: 40px;">
                        <h4 class="title">{{$item -> name}}</h4>

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="" style="width:60%;">Rodzaj zabiegu</th>
                                <th scope="col" style="width: 20%;">Cena</th>
                            </tr>
                            </thead>
                            <tbody>


                            @foreach($item -> phone as $single)
                                <tr>
                                    <td>{{$single->name}}</td>
                                    <td>{{$single->price}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    @endif


            @endforeach


        </div>
    </div>

    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-12 d-flex justify-content-between">--}}

                {{--<div class="embed-responsive" style="width: 220px; height: 400px;">--}}
                    {{--<video controls="true" class="embed-responsive-item">--}}
                        {{--<source src="img/video/1.mp4" type="video/mp4" />--}}
                    {{--</video>--}}
                {{--</div>--}}

                {{--<div class="embed-responsive" style="width: 220px; height: 400px;">--}}
                    {{--<video controls="true" class="embed-responsive-item">--}}
                        {{--<source src="img/video/2.mp4" type="video/mp4" />--}}
                    {{--</video>--}}
                {{--</div>--}}

                {{--<div class="embed-responsive" style="width: 220px; height: 400px;">--}}
                    {{--<video controls="true" class="embed-responsive-item">--}}
                        {{--<source src="img/video/3.mp4" type="video/mp4" />--}}
                    {{--</video>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}


@endsection