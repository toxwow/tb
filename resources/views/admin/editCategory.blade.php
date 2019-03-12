@extends('layouts.welcome')

@push('css')

@endpush

@section('content')
    <a href="{{route('categoryAdmin')}}">Kategorie</a>
    <h3 class="as">Edytor {{$service -> name}}</h3>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <button class="btn btn-secondary mb-5" id="changePhoto">zmień zdjęcie</button>
            <form action="{{ url('admin/kategorie/'. $service->id) }}" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    {{ csrf_field() }}
                    {{method_field('PATCH')}}
                    <input class="form-control-file mb-3" type="file" name="img" id="inputName"><br>
                    <label for="name">Nazwa kategorii</label>
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
        $('#inputName').hide();
        $('#changePhoto').click(function () {
            $('#inputName').show();
        });

        $('#summernote').summernote({
            tabsize: 2,
            height: 250
        });
    </script>
@endpush
