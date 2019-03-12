@extends('layouts.welcome')

@push('css')

@endpush

@section('content')
    <a href="{{route('categoryAdmin')}}">Kategorie</a>
    <h3>Dodaj nową kategorię</h3>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <form action="{{url('/admin/kategorie/dodaj')}}" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        {{ csrf_field() }}
                        <input class="form-control-file mb-3" required type="file" name="img" accept="image/*">
                        <label for="nameForm">Nazwa kategorii</label>
                        <input required class="form-control mb-3" id="nameForm" type="text" name="name" value="">
                        <label for="nameForm">Opis</label>
                        @if($errors->has('description'))
                            <div class="invalid-feedback" style="display: block">
                                Wprowadź opis
                            </div>
                        @endif
                        <textarea class="form-control" name="description" id="summernote"></textarea>
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
            placeholder: 'Wprowadź tekst',
            tabsize: 2,
            height: 250
        });
    </script>

@endpush
