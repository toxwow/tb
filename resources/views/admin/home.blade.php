@extends('layouts.welcome')


@section('content')

<div class="row">
    <div class="col-3">
        <div class="card text-center p-5"><a href="{{route('categoryAdmin')}}">Kategorie</a></div>
    </div>
    <div class="col-3">
        <div class="card text-center p-5"><a href="{{route('subCategoryAdmin')}}">Podkategorie</a></div>
    </div>
    <div class="col-3">
        <div class="card text-center p-5">Cennik</div>
    </div>
    <div class="col-3">
        <div class="card text-center p-5">Zdjęcia</div>
    </div>
</div>

@endsection