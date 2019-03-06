{{--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">--}}

    {{--<div class="carousel-inner">--}}
        {{--<div class="carousel-item active">--}}
            {{--<img class="d-block w-100" src={{'img/bg.png'}} alt="FirstSlide">--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

@push('css')

    <style>
        .button-wrapper{
            margin-top: 25px;
        }

        .button-wrapper > a.btn.btn-custom {
            background-color: #5aaf9c;
            padding: 12px 60px;
            border-radius: 50px;
            color: white;
            transition: all 0.2s ease-in-out;
        }

        .button-wrapper > a.btn.btn-custom.primary {
            margin-right: 15px;
        }

        .button-wrapper > a.btn.btn-custom.primary:hover {
            box-shadow: 0px 0px 43px 7px rgba(90,175,156, 0.32);
            color: white;
        }

        .button-wrapper > a.btn.btn-custom.white:hover {
            box-shadow: 0px 0px 43px 7px rgba(3, 7, 5, 0.09);
        }

        .button-wrapper > a.btn.btn-custom.white{
            background-color: white;

            color: #535353;
        }



    </style>

@endpush

<div class="jumbotron jumbotron-fluid" style="background: none; background-image: url({{'img/bg.png'}}); background-repeat: no-repeat; background-position: center;  ">
    <div class="container" style="height: 440px">
        <div style="display: flex; flex-direction: column; justify-content: center; height: 100%;">
            <h1 class="display-5" style="font-family: 'Times New Roman'; font-weight: 600; color: #535353">Spełniamu marzenia, nie przekraczamu granic</h1>
            <p class="lead" style="width: 60%; margin-top: 15px; color: #646464; line-height: 33px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci cumque esse fuga impedit quibusdam suscipit!</p>
            <div class="button-wrapper">
                <a class="btn btn-custom primary">OFERTA</a>
                <a class="btn btn-custom white">KONTAKT</a>
            </div>
        </div>
    </div>
</div>