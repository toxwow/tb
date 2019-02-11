@extends('layouts.main')
@section('title', '- Cennik')

@push('css')
    <style>
        .img-wrapper-person{
            display: flex;
            height: 100%;
            justify-content: center;
            align-items: center;
        }

        .img-wrapper-person > img{
            height: auto;
        }

        .wrapper-description-person{
            display: flex;
            height: 100%;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 40px 60px;
            background-color: #f4f3f1;
        }

        .wrapper-description-person p{
            margin: 0;
        }

        .wrapper-description-person .person-name{
            font-weight: 600;
            font-size: 1.15rem;
            margin-bottom: 40px;
            text-align: center;
            position: relative;
        }

        .wrapper-description-person .person-description{
            text-align: justify;

        }

        .wrapper-description-person .person-name:after{
            position: absolute;
            content: '';
            width: 50%;
            height: 1px;
            background-color: #929290;
            bottom: -10px;
            left: 0;
            right: 0;
            margin: 0 auto;
        }
    </style>
@endpush



@section('content')

    @component('components.Titles.simple-title' , ['colorStatus' => 'no']))
    @slot('title')
        O nas
    @endslot
    @slot('description')

    @endslot
    @endcomponent
    {{--@dd($prices)--}}


    <div class="container">
        <div class="row" style="margin-bottom: 110px;">
            <div class="col-12 col-md-6">
                <div class="img-wrapper-person">
                    <img src="{{ asset('img/team/01.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="wrapper-description-person">
                    <div class="person-name">
                        <p>Anna Taborska</p>
                    </div>
                    <div class="person-description">
                        <p>„moim marzeniem z dzieciństwa było pomaganie innym. Jako młoda dziewczyna wyobrażałam
                            sobie, że będę powodowała uśmiech na twarzach innych kobiet.
                            W 2007r. po 10 latach pracy w gabinetach kosmetycznych, zrozumiałam, że przyszedł czas na
                            realizację własnych marzeń. Tak powstało Studio Urody i Medycyny Estetycznej Anna Taborska,
                            które od 12 lat wywołuje uśmiech na twarzach naszych Klientek.
                            Od kilku lat już wiem, że kierunek w jakim zmierzam, to makijaż permanentny oraz sposoby
                            odnowy i rewitalizacji skóry”</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom: 110px;">
            <div class="col-12 col-md-6">
                <div class="wrapper-description-person">
                    <div class="person-name">
                        <p>Anna Brzuchacz</p>
                        <p style="color:#5aaf9c; font-size: 0.8rem;">wizażystka, charakteryzatorka</p>
                    </div>
                    <div class="person-description">
                        <p>„Z moją imienniczką współpracuję od 2016r.
                            Każda kobieta skrywa w sobie tajemnicę. Anna ma duszę artystki, co było dla mnie niezwykle
                            ważne przy podejmowaniu decyzji o rozpoczęciu współpracy. Jej wyobraźnia, w połączeniu z
                            wysokiej klasy kosmetykami pozwala na nowo definiować kobiece piękno wydobywając je
                            poprzez idealnie dobrany makijaż.
                            Anna zna doskonale tajniki wizażu i charakteryzacji, o czym świadczą jej prace i zdjęcia. Zjednuje
                            sobie zaufanie klientek salonu profesjonalizmem, bezpretensjonalną skromnością i ciągłym dążeniem do
                            doskonałości w tym co kocha robić. „</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="img-wrapper-person">
                    <img src="{{ asset('img/team/02.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom: 110px;">
            <div class="col-12 col-md-6">
                <div class="img-wrapper-person">
                    <img src="{{ asset('img/team/03.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="wrapper-description-person">
                    <div class="person-name">
                        <p>Magda Szajnar</p>
                        <p style="color:#5aaf9c; font-size: 0.8rem;">lekarz stomatolog, specjalista medycyny estetycznej</p>
                    </div>
                    <div class="person-description">
                        <p>„Z Magdą współpracuję od 2012r. O naszej wieloletniej współpracy zdecydowało przeznaczanie.
                            Magda w moim gabinecie pojawiła się z polecenia. Wiedziałam, że chcąc się rozwijać, powinnam
                            otaczać się profesjonalistami.
                            Magda ujęła mnie podejściem do naszych klientek. Jest bardzo konkretna i merytoryczna. Przy
                            tym niezwykle ciepła i przepełniona empatią. W życiu prywatnym zawsze próbuje zrozumieć
                            osoby z którymi rozmawia. Moje klientki niezwykle w niej to cenią. Magda ma niezwykłą
                            świadomość kobiecej urody, dlatego jej celem jest przywracanie naturalnego piękna, które czas
                            bezpowrotnie próbuje nam odebrać .
                            Każdy zabieg medycyny estetycznej poprzedzony jest konsultacją. Podczas rozmowy, Magda
                            odpowiada na wszystkie pytania, określa wiek skóry i wsłuchuje się w oczekiwania pacjenta. Na
                            tej podstawie podejmuje decyzje o rodzaju zabiegu zgodnie z naszą dewizą „realizujemy
                            marzenia, nie przekraczamy granic.”</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection