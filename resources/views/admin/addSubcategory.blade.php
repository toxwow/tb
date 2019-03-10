@extends('layouts.welcome')

@push('css')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
@endpush

@section('content')
    <a href="{{route('subCategoryAdmin')}}">Podkategorie</a>
    <h3 class="as">Edytor </h3>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <form action="{{ url('admin/podkategorie/dodaj')}}" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        {{ csrf_field() }}
                        <label for="nameForm">Nazwa podkategorii</label>
                        <input class="form-control mb-3" id="nameForm" type="text" name="name" value="">
                        <label for="category">Kategoria</label>
                        <select name="category" id="" class="form-control mb-3">
                            @foreach($category as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                        <label for="nameForm">Opis</label>
                        <textarea class="form-control" id="editor" name="description"></textarea>
                        <button type="submit" class="btn btn-primary mt-2 float-right" >Zapisz zmiany</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection

@push('script')

    <script>
        function MyUploadAdapterPlugin( editor ) {
            editor.plugins.get( 'FileRepository' ).createUploadAdapter = function( loader ) {
                // ...
            };
        }
        // CKEDITOR.replace( 'editor1' );
        ClassicEditor
            .create( document.querySelector( '#editor' ),{
                extraPlugins: [ MyUploadAdapterPlugin ],
            } )
            .then( newEditor => {
                editor = newEditor;
            } )
            .catch( error => {
                console.error( error );
            } );



    </script>
@endpush
