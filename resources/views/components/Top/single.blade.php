@push('css')

    <style>
        .wrapper-slider{
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
        }

        .button-wrapper{
            margin-top: 25px;
            display: flex;
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

        p.lead{
            width: 60%;
            margin-top: 15px;
            color: #646464;
            line-height: 33px
        }

        @media (max-width: 720.98px) {
            p.lead{
                width: 100%;
            }

            .wrapper-slider{
                text-align: center;
            }
            .button-wrapper{
                justify-content: center;
            }
        }

        @media (max-width: 420.98px) {

            .button-wrapper {
                flex-direction: column;
            }

            .button-wrapper a.btn{
                width: 70%;
                margin: 10px auto !important;
            }
        }



    </style>

@endpush

<div class="jumbotron jumbotron-fluid" style="background: none; background-image: url({{'img/bg.png'}}); background-repeat: no-repeat; background-position: center;  ">
    <div class="container" style="height: 440px">
        <div class="wrapper-slider" style="">
            <h1 class="display-5" style="font-family: 'Times New Roman'; font-weight: 600; color: #535353">Spełniamu marzenia, nie przekraczamu granic</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci cumque esse fuga impedit quibusdam suscipit!</p>
            <div class="button-wrapper">
                <a class="btn btn-custom primary" href="{{route('oferta')}}">OFERTA</a>
                <a class="btn btn-custom white" href="{{ route('kontakt') }}">KONTAKT</a>
            </div>
        </div>
    </div>
</div>


@push('script')

    <script>
    </script>


@endpush