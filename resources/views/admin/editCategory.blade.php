@extends('layouts.welcome')

@push('css')

@endpush

@section('content')
    <a href="{{route('categoryAdmin')}}">Kategorie</a>
    <h3 class="as">Edytor {{$service -> name}}</h3>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
            <form action="{{ url('admin/kategorie/'. $service->id) }}" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    {{ csrf_field() }}
                    {{method_field('PATCH')}}
                    <input class="form-control mb-3" type="file" name="img">
                    <label for="nameForm">Nazwa kategorii</label>
                    <input class="form-control mb-3" id="nameForm" type="text" name="name" value="{{$service->name}}">
                    <label for="nameForm">Opis</label>
                    <textarea class="form-control" name="description" id="summernote">{{$service->main_description}}</textarea>
                    <button type="submit" class="btn btn-primary mt-2 float-right" >Zapisz zmiany</button>
                </div>
            </form>
            </div>
        </div>

    </div>

@endsection

@push('script')
    <script>
        $('#summernote').summernote({
            tabsize: 2,
            height: 400
        });
    </script>
@endpush
