@extends('layouts.main')
@section('title', ' - Home')

@push('css')
    <style>
        .img-wrapper-category {
            width: 50%;
            min-height: 200px;
            overflow: hidden;
        }

        #more{
            display: none;
        }

        .img-wrapper-category > div {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            width: 100%;
            transition: all 0.5s ease-out;
        }

        .wrapper-text-category{
            width: 50%;
            background-color: rgba(238, 237, 234, 0.85);
            transition: all 0.5s ease-in-out;
            cursor: pointer;
        }
        .wrapper-text-category:hover{
            background-color: rgba(223, 242, 228, 0.95);
        }

        .wrapper-single-category:hover .img-wrapper-category > div {
            transform: scale(1.1);

        }

        .wrapper-text-category > div.title{
            padding: 20px;
            font-size: 1.3rem;
            font-weight: 300;
        }

        .icon-toogle{
            width: 15px;
            height: 15px;
            position: relative;
        }

        .icon-toogle:before{
            content: '';
            background-color: #1b1e21;
            position: absolute;
            transition: transform 0.25s ease-out;
            top: 0;
            left: 50%;
            width: 2px;
            height: 100%;
            margin-left: -1px;
        }

        .icon-toogle:after{
            content: '';
            background-color: #1b1e21;
            position: absolute;
            transition: transform 0.25s ease-out;
            top: 50%;
            left: 0;
            width: 100%;
            height: 2px;
            margin-top: -1px;
        }

        .icon-toogle.active:after{
            transform: rotate(180deg);
        }

        .icon-toogle.active:before{
            transform: rotate(90deg);
        }

        ul.subCategory li a{
            text-decoration: none;
            color: #1b1e21;
            opacity: 0.6;
            transition: all 1s ease-out;
            text-decoration: underline;
        }

        ul.subCategory li a:hover{
            opacity: 1;
        }

        @media (max-width: 575.98px) {
            .img-wrapper-category{
                display: none;
            }

            .wrapper-text-category{
              width: 100% !important;
          }
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
            Wśród najważniejszych i najbardziej aktualnych działań podejmowanych w obszarze kosmetyki, estetyki i dbałości o piękno kobiece w naszym gabinecie wykonywane są specjalistyczne zabiegi z zakresu szeroko pojętej profesjonalnej kosmetologii, makijażu permanentnego, jak i medycyny estetycznej.<span id="dots">...</span><span id="more"> Praca prowadzona jest z zastosowaniem najwyższej jakości, najnowszych preparatów medycznych, innowacyjnych technologii, środków i urządzeń kosmetycznych. Pełna lista zabiegów wraz z ich szacowanym kosztem znajduje się poniżej.</span>
            <span onclick="myFunction()" id="myBtn" style="text-decoration: underline">Czytaj więcej</span>
        @endslot
    @endcomponent

    <div class="container">
        <div class="row">
            @foreach($groupeServiceTest as $key=>$service)
                <div class="col-12 col-md-11 mx-auto mb-1">
                    <div class="d-flex wrapper-single-category">
                        <div class="img-wrapper-category" style="">
                            <div style="background-image: url('img/category/{{$service->image}}');">

                            </div>
                        </div>
                        @if($service -> uslugi == null)
                        <div class='wrapper-text-category'>
                            <a href="{{route('test', ['id' => $service->alias])}}">
                                <div class="title d-flex justify-content-between align-items-center">
                                    <p style="margin-bottom: 0;"> {{$service->name}}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                @else
                <div class='wrapper-text-category'>
                    <div class="title d-flex justify-content-between align-items-center">
                        <p style="margin-bottom: 0;"> {{$service->name}}</p>
                        <div class="icon-toogle"></div>
                    </div>
                    <ul class="subCategory">
                        @foreach($service->uslugi as $key =>  $test)
                            <li><a href="{{route('subcategory', ['id' => $service->alias ,'id2' => $service->alias_sub[$key]])}}">{{$test}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
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
                    @foreach($photos->shuffle()->slice(0, 4) as $photo)
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
            <div class="col-sm-12 col-md-8 order-last order-md-first">
                <div class="wrapper-map">
                    <div id="map"></div>
                    <div class="map-bg"></div>
                </div>


            </div>
            <div class="col-sm-12 col-md-4 order-first order-md-last mb-3">
                <p class="m-0 mb-1">Anna Taborska</p>
                <p class="m-0 mb-1">Bocheńska 28a</p>
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

        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Czytaj więcej";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Zwiń";
                moreText.style.display = "inline";
            }
        }

        $('.subCategory').hide();
        $( ".wrapper-text-category" ).click(function() {
            if($(this).children('.subCategory').is(':visible')){
                $(this).children('.title').children('div').removeClass('active')
            }


        else{
                $(this).children('.title').children('div').addClass('active');
            }
            $(this).children('.subCategory').slideToggle('fast', 'linear');

        });



    </script>
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
