@extends('layouts.welcome')


@section('content')
    <a href="{{ route('categoryAdmin') }}">Kategorie</a>
    <h3>{{$service->name}}</h3>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4">
                <div>
                    <img src="{{asset('img/category/'. $service->image)}}" alt="" style="width: 100%">
                </div>
            </div>
            <div class="col-8">
                <div>
                    <p class="lead">Opis:</p>
                    <p>{!! $service->main_description !!}</p>
                </div>
            </div>
        </div>
    </div>
    <a href="{{route('categorySingleAdmin-edit',$service->id) }}" class="btn btn-info my-5" style="width: 100%; color: white">Edytuj {{$service->name}}</a>
    <hr style="margin: 50px 0;">
    <div style="">
        <p class="lead">Pod kategorie</p>
        @if(empty($test->first()))
            <div class="alert alert-danger" role="alert">
                Brak podkategorii. Pamiętaj, że w przypadku braku pod kategorii zostanie wyświetlony opis kategorii.
            </div>
        @endif
        <ul>
            @foreach($test as $item)
                <li>{{$item->sub_service_name}}</li>
            @endforeach

        </ul>
        <button type="button" class="btn btn-success">Dodaj podkategorie</button>
    </div>

@endsection