@extends('layouts.welcome')

@section('content')
    @if(session()->has('sucess'))
        <div class="alert alert-success move-alert" role="alert" style="position: absolute; width: 97%">
            {{session()->get('sucess')}}
        </div>
    @endif
    <a href="{{route('admin')}}">Panel główny</a>
    <h3>Wybierz kategorie</h3>
    <div class="container mt-5">
        <div class="row">
            @foreach($allService as $item)
                <div class="col-4 my-2 text-center">
                    <div class="card p-5">
                        <a href="{{route('categorySingleAdmin', $item->id)}}">{{$item->name}}</a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection