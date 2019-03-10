@extends('layouts.welcome')

@push('css')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
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
                    <label for="nameForm">Nazwa kategorii</label>
                    <input class="form-control mb-3" id="nameForm" type="text" name="name" value="{{$service->name}}">
                    <label for="nameForm">Opis</label>
                    <textarea class="form-control" id="editor" name="description">{{$service->main_description}}</textarea>
                    <button type="submit" class="btn btn-primary mt-2 float-right" >Zapisz zmiany</button>
                </div>
            </form>
            </div>
        </div>

    </div>

@endsection

@push('script')

    <script>
        // CKEDITOR.replace( 'editor1' );
        let editor;

        ClassicEditor
            .create( document.querySelector( '#editor' ),{

            } )
            .then( newEditor => {
                editor = newEditor;
            } )
            .catch( error => {
                console.error( error );
            } );



    </script>
@endpush
