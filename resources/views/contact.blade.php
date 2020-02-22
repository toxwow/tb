@extends('layouts.main')
@section('title', '- Kontakt')

@push('css')

@endpush

@section('top')
    <div class="line"></div>
@endsection

@section('content')

    @component('components.Titles.simple-title' , ['colorStatus' => 'no']))
    @slot('title')
        kontakt
    @endslot
    @slot('description')
    @endslot
    @endcomponent

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 order-last order-md-first">
                <div class="wrapper-map">
                    <div id="map"></div>
                    <div class="map-bg"></div>
                </div>


            </div>
            <div class="col-sm-12 col-md-4 order-first order-md-last mb-3">
                <p class="m-0 mb-1">Anna Taborska</p>
                <p class="m-0 mb-1">Plac Kazimierza Wielkiego 11</p>
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
            var uluru = {lat: 50.0299008, lng: 20.2215739};
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