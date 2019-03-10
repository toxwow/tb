@extends('layouts.welcome')


@section('content')
    <div class="d-flex" style="justify-content: space-between; align-items: center">
        <div>
            <a href="{{route('admin')}}">Panel główny</a>
            <h3>Podkategorie</h3>
        </div>
        <div>
            <a href="{{route('addNewSubcategory')}}" class="btn btn-primary">Dodaj nową podkategorie</a>
        </div>
    </div>
    <hr>
    <div class="container mt-5">
        <div class="row">

            <div class="col-12">
                <label for="optionGroup">Sortuj kategorie</label>
                <select class="form-control" name="" id="optionGroup">
                    @foreach($allService as $item)
                        <option value="{{$item -> id}}">{{$item -> name}}</option>
                    @endforeach
                    <option selected value="0" >Wszystkie</option>
                </select>
            </div>
            <div class="col-12 mt-5">


                @foreach($allService as $item)
                    <div id="{{$item->id}}" class="group-category">
                        <h3 style="margin: 50px 0 5px;">{{$item->name}}</h3>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Nazwa podkategorii</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(empty($item->test->first()))
                                <tr>
                                    <td style="width: 50%">BRAK PODKATEGORII</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @else
                                @foreach($item->test as $single)
                                    <tr>
                                        <td style="width: 50%;">{{$single->sub_service_name}}</td>
                                        <td style="width: 25%; text-align: right;"><a href="{{route('subCategoryAdmin-edit', $single->id)}}">edytuj</a></td>
                                        <td style="width: 25%; text-align: right; padding-right: 50px">
                                            <form method="POST" action="{{url('/admin/podkategorie/'.$single->id)}}">
                                                {{ csrf_field() }}
                                                {{method_field('DELETE')}}
                                                <button type="submit" onclick="return confirm('czy na pewno chcesz usunąć tę podkategorię?')" class="btn btn-danger" style="font-size: 10px;">USUŃ</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                            </tbody>
                        </table>
                    </div>
                @endforeach
            <br>


            {{--@foreach($allService as $key => $items)--}}
                {{--<div id="{{$key}}" style="" class="group-category">--}}
                    {{--<p style="font-size: 16px">Kategoria: <strong>{{$category->where('id', $key)->first()->name}}</strong></p>--}}
                    {{--@foreach($items as $item)--}}
                        {{--{{$item->sub_service_name}}<br>--}}
                    {{--@endforeach--}}
                {{--</div>--}}
                {{--<br>--}}
            {{--@endforeach--}}
        </div>
        </div>
    </div>

@endsection

@push('script')
    <script>
        document.getElementById('optionGroup').addEventListener('change', function () {
            $('.group-category').hide();
            let x = document.getElementById('optionGroup').value;
            console.log(x);
            $( "#"+ x ).show();
            if(x == 0){
                $('.group-category').show();
            }
            function isEmpty( el ){
                return !$.trim(el.html())
            }
            if (isEmpty($('#element'))) {
                // do something
            }
        })
    </script>
@endpush