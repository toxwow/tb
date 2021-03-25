@extends('layouts.welcome')

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">
    <style>
        .img-wrapper-form{
            position: relative;
        }

        .form-wrapper{
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: black;
            z-index: 3;
            top:0;
            color: white;
            left: 0;
            opacity: 0;
            transition: all 0.2s ease-in-out;
        }

        .img-wrapper-form:hover .form-wrapper{
            opacity: 0.7;
        }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@section('content')
    <div class="container">
        <h3 class="as">Galeria</h3>
        <div class="row">
                @foreach($photos as $item)
                    <div class="col-2 my-1 ">
                        <div class="img-wrapper-form">
                            <div class="form-wrapper">
                                <div class="d-flex h-100" style="align-items: center; justify-content: center;">
                                    <p data-id="{{$item->id}}" class='btn-delete-ajax' style=" color: white; opacity: 1; font-size: 18px; cursor: pointer; padding: 20px;">
                                        <i class="fas fa-trash-alt"></i>

                                        @csrf
                                    </p>
                                </div>

                            </div>
                            <img src="{{asset('img/slider/').'/'.$item->path}}" alt="" style="width: 100%">

                        </div>

                    </div>
                @endforeach
            <div class="col-2 my-1">
                <button class="btn btn-success w-100 h-100" style="min-height: 150px;" id="addImage"><i class="fas fa-plus"></i></button>
            </div>
        </div>

        <div class="panel panel-info" style="margin-top: 100px" id="uploadContent">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4" style="">
                        <form action="" class="form-group">
                            <input required class="form-control-file mb-3" name="imagePath" type="file" id="imagePath">
                            <label for="imageName">Podaj nazwę</label>
                            <input required class="form-control mb-3" name="imageName" type="text" id="imageName">
                            <label for="category">Kategoria</label>
                            <select name="category" id="categoryOptions" class="form-control mb-3">
                                @foreach($category as $item)
                                    <option data-alias={{$item->alias}} value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            <label for="imageAlt">Podaj opis</label>
                            <textarea required class="form-control mb-3" name="imageAlt" type="textarea" id="imageAlt"></textarea>
                            <button type="submit" class="btn btn-primary btn-block upload-image" style="margin-top:2%">Dodaj zdjęcie</button>
                        </form>
                    </div>
                    <div class="col-md-8 text-center">
                        <div id="upload-demo"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('script')
    <script>

            $('.btn-delete-ajax').click(function(e){
                var r = confirm("Czy na pewno chcesz usunąć zdjęcie?");
                if (r == true) {
                    var id = $(this).attr('data-id');
                    e.preventDefault();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        {{--url: "{{route('delete.image')}}/" + id,--}}
                        url: "{{URL::to('/admin/galeria/delete')}}/" + id,
                        method: 'post',
                        data: {
                            name: jQuery('#name').val(),
                            type: jQuery('#type').val(),
                            price: jQuery('#price').val(),
                            '_method': 'POST',
                            "_token": token,
                        },
                        success: function (result) {
                            window.location.reload();
                            history.go(0);
                            window.location.href = window.location.href;
                        }
                    });
                }
                else{

                }
            });

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js"></script>
    <script>
        $('#upload-demo').hide();
        $('#uploadContent').hide();
        $('#addImage').on('click', function () {
            $('#uploadContent').show();
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#uploadContent").offset().top
            }, 2000);
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var resize = $('#upload-demo').croppie({
            enableExif: true,
            enableOrientation: true,
            viewport: {
                width: 600,
                height: 600,
                type: 'square'
            },
            boundary: {
                width: 650,
                height: 650
            }
        });
        $('#imagePath').on('change', function () {
            $('#upload-demo').show();
            var reader = new FileReader();
            reader.onload = function (e) {
                resize.croppie('bind',{
                    url: e.target.result
                }).then(function(){
                    console.log('jQuery bind complete');
                });
            }
            reader.readAsDataURL(this.files[0]);
        });
        $('.upload-image').on('click', function (ev) {
            resize.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function (img) {
                var categorySelect = $( "#categoryOptions option:selected" ).text();
                var aliasSelect = $( "#categoryOptions option:selected" ).attr('data-alias');
                var nameImg = $( "input#imageName" ).val();
                var descImg = $( "textarea#imageAlt" ).val();
                $.ajax({
                    {{--url: "{{route('upload.image')}}",--}}
                    url: '{{URL::to('/admin/galeria/')}}',
                    type: "post",
                    data: {
                        "image":img,
                        "category": categorySelect,
                        "alias": aliasSelect,
                        "name": nameImg,
                        "alt": descImg,
                    },

                    success: function (data) {
                        window.location.reload();
                        history.go(0);
                        window.location.href=window.location.href;
                    }
                });
            });
        });

    </script>
@endpush
