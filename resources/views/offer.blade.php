@extends('layouts.main')
@section('title', '')
@push('css')
    <style>
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
    <div class="line"></div>
@endsection


@section('content')

    @component('components.Titles.simple-title' , ['colorStatus' => 'no']))
    @slot('title')
        oferta
    @endslot
    @slot('description')
    @endslot
    @endcomponent

<div class="container">
    <div class="row">
        @foreach($groupeServiceTest as $key=>$service)
            <div class="col-11 mx-auto mb-1">
                <div class="d-flex wrapper-single-category">
                    <div class="img-wrapper-category" style="">
                        <div style="background-image: url('img/category/{{$service->image}}');">

                        </div>
                    </div>
                    <div class='wrapper-text-category'>
                        <div class="title d-flex justify-content-between">
                            <p> {{$service->name}}</p>
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

        @endforeach
    </div>
</div>

@endsection

@push('script')
    <script>

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

@endpush