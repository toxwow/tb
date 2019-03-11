@extends('layouts.welcome')


@section('content')
    <a href="{{route('admin')}}">Panel główny</a>
    <h3>Kategorie</h3>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4 my-2 text-center">
                <div class="card p-5" style="background-color: #5aaf9c; color: white;">
                    <a href="{{route('addNewCategory')}}" style="color:white;">Dodaj nową kategorie</a>
                </div>
            </div>
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