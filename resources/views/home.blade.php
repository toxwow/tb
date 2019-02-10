@extends('layouts.main')
@section('title', '')

@push('css')

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
                    <div class="col-md-5 offset-md-2 col-12" style="position: relative; margin-bottom: 50px;">
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
                    <div class="col-md-5 col-12" style="position: relative; margin-bottom: 50px;">
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

    @component('components.Titles.simple-title' , ['colorStatus' => 'no']))
    @slot('title')
        galeria
    @endslot
    @slot('description')@endslot
    @endcomponent
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel owl-theme">
                    @foreach($photos as $photo)
                        <div class="single-img">
                            <img src="{{asset('img/slider/'.$photo -> path)}}" alt="{{$photo->alt}}">
                            <div class="blur-wrapper">
                                <div class="text-center">
                                    <p>{{$photo -> name}}</p>
                                    <a href="oferta/{{$photo -> alias}}">zobacz</a>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @component('components.Titles.simple-title' , ['colorStatus' => 'no']))
    @slot('title')
        kontakt
    @endslot
    @slot('description')
    @endslot
    @endcomponent

    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="wrapper-map">
                    <div id="map"></div>
                    <div class="map-bg"></div>
                </div>


            </div>
            <div class="col-4">
                <p class="m-0 mb-1">Anna Taborska</p>
                <p class="m-0 mb-1">Kazimierza Wielkiego 11</p>
                <p class="m-0">32-005 Niepołomice</p>
                <div class="mt-4 mb-1" style="display: inline-flex">
                    <i class="material-icons" style="margin-right: 8px; color: #646464">phone</i>
                    <p class="mb-0">tel. 506 100 123</p>
                </div>
                <div style="display: inline-flex">
                    <i class="material-icons" style="margin-right: 8px; color: #646464">email</i>
                    <p class="m-0">email: studio@annataborska.pl</p>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')
    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            var uluru = {lat: 50.0370005, lng: 20.2163937};
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 15, center: uluru});
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({position: uluru, map: map});
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFi6RA4sKNf00vPBybzIf3Sypjw-11JiE&callback=initMap">
    </script>
@endpush