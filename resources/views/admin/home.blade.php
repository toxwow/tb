@extends('layouts.welcome')

@push('css')
    <style>
        .wrapper-content{
            background-color: white;
            width: 100%;
            border-radius: 5px;
            padding: 20px;
        }

        .box-shadow{
            box-shadow: 0 1px 30px rgba(0, 0, 0, 0.10);
        }

        .wrapper-title{
            border-bottom: 1px solid #f1f1f1;
            margin-bottom: 20px;
        }

        .wrapper-title p.title{
            margin-bottom: 10px;
            margin-left: 20px;
            text-transform: uppercase;
            font-size: 13px;
            font-weight: 600;
            color: #aaaaaa;
        }

        .wrapper-title p.title > i{
            font-size: 18px; color: rgb(90, 175, 156); margin-right: 10px;
        }

        div.content p.value{
            font-size: 26px;
            color: black;
            font-weight: 600;
        }
    </style>
@endpush

@section('content')

<div class="row">
    <div class="col-8">
        <div class="box-shadow wrapper-content">
            <div class="wrapper-title">
                <p class="title"> <i class="far fa-eye"></i> Wejścia na stronę</p>
            </div>
            <div class="content">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="h-100">
            <div class="box-shadow wrapper-content" style="margin-bottom: 10px;">
                <div>
                    <div class="wrapper-title">
                        <p class="title"> <i class="far fa-user"></i> Aktywnych użytkowników</p>
                    </div>
                    <div class="content">
                        <p class="value">{{$usersActive}}</p>
                    </div>
                </div>
            </div>
            <div class="box-shadow wrapper-content">
                <div class="wrapper-title">
                    <p class="title"> <i class="fas fa-sitemap"></i> Najczęściej odwiedzana strona</p>
                </div>
                <div class="content d-flex" style="">
                    <p style="width: 80%; padding: 10px; background-color: #f9f9f9">{{$mostPage[0]['url']}}</p>
                    <p style="width: 20%; padding: 10px; text-align: center; background-color: #f3f3f3">{{$mostPage[0]['pageViews']}}</p>
                </div>

                <div class="content d-flex" style="">
                    <p style="width: 80%; padding: 10px; background-color: #f9f9f9">{{$mostPage[1]['url']}}</p>
                    <p style="width: 20%; padding: 10px; text-align: center; background-color: #f3f3f3">{{$mostPage[1]['pageViews']}}</p>
                </div>

                {{--<div class="content d-flex" style="">--}}
                    {{--<p style="width: 80%; padding: 10px; background-color: #f9f9f9">{{$mostPage[3]['url']}}</p>--}}
                    {{--<p style="width: 20%; padding: 10px; text-align: center; background-color: #f3f3f3">{{$mostPage[3]['pageViews']}}</p>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>



</div>

@endsection

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <script>
        var ctx = document.getElementById("myChart");

        var myChart = new Chart(ctx, {
            type: 'line',
            responsive: true,
            data: {
                labels: [
                    @foreach($test as $item)
                            @php
                                $newDate = date("m.d.y", strtotime($item['date']));
                            @endphp
                    "{{$newDate}}",
                    @endforeach
                ],
                datasets: [{
                    data: [
                        @foreach($test as $item)
                            {{$item['pageViews']}},
                        @endforeach

                    ],
                    backgroundColor: [
                        'rgba(90, 175, 156, 0.1)',
                    ],
                    borderColor: [
                        'rgba(90, 175, 156,1)',
                    ],
                    borderWidth: 2
                }]
            },
            options: {

                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true,
                            stepSize: 5,
                        }
                    }]
                },
                legend: {
                    display: false,
                },
                layout: {
                    padding: {
                        left: 10,
                        right: 50,
                        top: 0,
                        bottom: 10
                    }
                }
            }
        });
    </script>
@endpush