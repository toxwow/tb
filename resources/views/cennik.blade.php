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



@section('content')

    @component('components.Titles.simple-title' , ['colorStatus' => 'no']))
    @slot('title')
        Cennik
    @endslot
    @slot('description')

    @endslot
    @endcomponent
    {{--@dd($prices)--}}


    <div class="container">
        <div class="row">

                @foreach($prices as $key => $item)
                <div class="col-12" style="margin-bottom: 40px;">
                    <h4 class="title">{{$key}}</h4>

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="" style="width:60%;">Rodzaj zabiegu</th>
                            <th scope="col" style="width: 20%;">Czas trwania</th>
                            <th scope="col" style="width: 20%;">Cena</th>
                        </tr>
                        </thead>
                        <tbody>


                        @foreach($item as $dupa => $itemss)
                            <tr>
                                <td>{{$itemss->sub_service_name}}</td>
                                <td>{{$itemss->time}} min</td>
                                <td>{{ number_format($itemss->price, 0, ',' , '.')}} zł</td>
                            </tr>


                        @endforeach
                        </tbody>
                    </table>
                </div>
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