@extends('layouts.welcome')


@section('content')
    @if(session()->has('sucess'))
        <div class="alert alert-success move-alert" role="alert" style="position: absolute; width: 97%">
            {{session()->get('sucess')}}
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            @foreach($price as $item)
                <h3 style="margin: 50px 0 5px;">{{$item->name}}</h3>
                <table class="table table-striped">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nazwa usługi</th>
                        <th scope="col">Cena</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($item->phone as $single)
                        <tr>
                            <td style="width: 50%;">{{$single->name}}</td>
                            <td style="width: 25%;">
                                {{$single->price}}
                            </td>
                            <td style="width: 25%; text-align: right; padding-right: 50px">
                                <a class="btn btn-primary edit-button" style="color: white; font-size: 10px; padding:0.375rem 0.75rem;" id-group='{{$item->id}}' id-item='{{$single->id}}' item-name='{{$single->name}}' price-value='{{$single->price}}' data-toggle="modal" data-target="#modalEdit"><i class="fas fa-edit"></i></a>
                            </td>
                            <td style="width: 25%; text-align: right; padding-right: 50px">
                                <form method="POST" action="{{url('/admin/cennik/'.$single->id)}}">
                                    {{ csrf_field() }}
                                    {{method_field('DELETE')}}
                                    <button type="submit" onclick="return confirm('czy na pewno chcesz usunąć tę podkategorię?')" class="btn btn-danger" style="font-size: 10px;"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                        <tr>
                            <td colspan="4" style="width: 100%;">
                                <button class="w-100 btn btn-success add-button" id-group='{{$item->id}}' name-group='{{$item->name}}' data-toggle="modal" data-target="#modalAdd"><i class="fas fa-plus"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            @endforeach
        </div>
    </div>

    <!-- Modal edit-->
    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edytuj</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" id="form-update" enctype="multipart/form-data">
                        <div class="form-group">
                            @method('PATCH')
                            @csrf
                            <label for="name">Nazwa usługi</label>
                            <input class="form-control mb-3" id="nameForm" type="text" name="name" value="">
                            <label for="price">Cena</label>
                            <input class="form-control mb-3" id="priceForm" type="text" name="price" value="">
                            <button type="submit" class="btn btn-primary mt-2 float-right" >Zapisz zmiany</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal add-->
    <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="titleAddModal">Dodaj do </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/cennik/') }}" id="form-add" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            {{ csrf_field() }}
                            <input class="form-control mb-3" id="groupName" type="hidden" name="service_id" value="">
                            <label for="name">Naza Usługi</label>
                            <input required class="form-control mb-3" id="nameForm" type="text" name="name" value="">
                            <label for="price">Cena</label>
                            <input required class="form-control mb-3" id="priceForm" type="text" name="price" value="">
                            <button type="submit" class="btn btn-primary mt-2 float-right" >Zapisz zmiany</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('script')
    <script>
        $("a.edit-button").on('click', function() {
            $idGroup = $(this).attr("id-group");
            $idItem = $(this).attr("id-item");
            $nameItem = $(this).attr("item-name");
            $priceItem = $(this).attr("price-value");
            $urlUpdate = "{{ url('admin/cennik/') }}" + '/' + $idItem;
            $urlAdd = "{{ url('admin/cennik/') }}";

            $('#form-update').attr('action', $urlUpdate);
            $("#nameForm").val($nameItem);
            $("#priceForm").val($priceItem);
        });

        $(".add-button").on('click', function() {
            $nameGroup = $(this).attr("name-group");
            $( "#titleAddModal" ).html( 'Dodaj do: ' + $nameGroup );
            $idGroup = $(this).attr("id-group");
            $("#groupName").val($idGroup);

        });

    </script>
@endpush
