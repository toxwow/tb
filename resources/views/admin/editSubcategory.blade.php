@extends('layouts.welcome')

@push('css')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
@endpush

@section('content')
    <a href="{{route('subCategoryAdmin')}}">Podkategorie</a>
    <h3 class="as">Edytor {{$service -> sub_service_name}}</h3>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <form action="{{ url('admin/podkategorie/'. $service->id) }}" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        {{ csrf_field() }}
                        {{method_field('PATCH')}}
                        <label for="nameForm">Nazwa podkategorii</label>
                        <input class="form-control mb-3" id="nameForm" type="text" name="name" value="{{$service->sub_service_name}}">
                        <label for="category">Kategoria</label>
                        <select name="category" id="" class="form-control mb-3">
                            @foreach($category as $item)
                                <option value="{{$item->id}}" {{ $item->id == $service->service_id ? 'selected' : ''}}>{{$item->name}}</option>
                            @endforeach
                        </select>
                        <label for="nameForm">Opis</label>
                        <textarea class="form-control" name="description" id="summernote">{{$service->description}}</textarea>
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
            height: 250
        });
    </script>
@endpush
