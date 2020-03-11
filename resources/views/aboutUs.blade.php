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
                        <p style="color:#5aaf9c; font-size: 0.8rem;">Kosmetolog, właściciel Studia Urody i Medycyny Estetycznej</p>

                    </div>
                    <div class="person-description">
                        <p>„Odkąd pamiętam zawsze marzyłam o pomaganiu innym, zwłaszcza kobietom i szczególnie w zakresie  uzewnętrzniania ich piękna, które choć często ukryte, należy harmonijnie i z wielka dbałością o detal uchwycić i odkryć. W 2007 r. postanowiłam po 10 latach pracy w renomowanych gabinetach kosmetycznych podjęłam decyzję o realizowaniu własnych planów, założeniu własnej firmy, dalszym rozwijaniu umiejętności oraz wiedzy. Tak powstało Studio Urody i Medycyny Estetycznej Anna Taborska, które od 12 lat wywołuje uśmiech na twarzach naszych Klientek, pragnie rozwijać ich piękno na zewnątrz, jak i w ich duszy. Aktualnie od kilku lat kierunek w jakim zmierzam i specjalizuję się, to makijaż permanentny oraz sposoby odnowy i rewitalizacji skóry.”</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom: 110px;">
            <div class="col-12 col-md-6">
                <div class="wrapper-description-person">
                    <div class="person-name">
                        <p>Magda Szajnar</p>
                        <p style="color:#5aaf9c; font-size: 0.8rem;">Absolwentka Collegium Medicum Uniwersytetu Jagiellońskiego w Krakowie, lekarz stomatolog, specjalista medycyny estetycznej. Pomysłodawca i właścicielka Ipokrzyku.pl Centrum Stomatologii I Leczenia Bruksizmu w Krakowie.</p>
                    </div>
                    <div class="person-description">
                        <p>„Z Magdą współpracuję od 2012r. Można powiedzieć, że o naszej wieloletniej współpracy zdecydowało przeznaczenie, bo w moim gabinecie pojawiła się z polecenia, od razu zwracając uwagę na niezwykłą osobowość i dużą wiedzę. Wiedziałam, że sama chcąc się rozwijać, powinnam otaczać się specjalistami, którzy pracując korzystają z profesjonalnej wiedzy i doświadczenia. Magda ujęła mnie kulturą osobistą oraz podejściem do naszych Klientek, bo z jednej strony jest bardzo konkretna i merytoryczna, a z drugiej niezwykle ciepła i przepełniona empatią. Zawsze uśmiechnięta, próbuje zrozumieć osoby z którymi rozmawia. Myślę, że Klientki niezwykle cenią te cechy. Magda ma niezwykłą uwagę i świadomość kobiecej urody, dlatego jej celem jest przywracanie naturalnego piękna, które mamy wrażenie, że czas próbuje odebrać. Każdy zabieg medycyny estetycznej poprzedzony jest specjalistyczną konsultacją. Magda, podczas rozmowy, cierpliwie odpowiada na wszystkie pytania, określa wiek skóry i wsłuchuje się w oczekiwania pacjenta. Na tej podstawie podejmuje decyzje o rodzaju zabiegu, zgodnie z dewizą Studia, którego zadaniem jest realizowanie marzenia, bez przekraczania granic i dobrego smaku”</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 order-first order-md-last">
                <div class="img-wrapper-person">
                    <img src="{{ asset('img/team/02.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom: 110px;">
            <div class="col-12 col-md-6">
                <div class="img-wrapper-person">
                    <img src="{{ asset('') }}" alt="">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="wrapper-description-person">
                    <div class="person-name">
                        <p>Dominika Domanus</p>
                        <p style="color:#5aaf9c; font-size: 0.8rem;">Absolwentka Zdrowia Publicznego Collegium Medicum Uniwersytetu Jagiellońskiego, technik usług kosmetycznych. Od lat związana z branżą farmaceutyczną, była także pracownik administracyjny Collegium Medicum Uniwersytetu Jagiellońskiego. Właścicielka mobilnego gabinetu depilacji laserowej Depi-mania.</p>
                    </div>
                    <div class="person-description">
                        <p>„Z Dominiką również poznałyśmy się przez polecenie. Prowadząc mobilny gabinet depilacji laserowej pojawiła się na zaproszenie i od razu z zaangażowaniem rozpoczęła współpracę ze mną, jak i Klientkami Studia. Niezwykle otwarta, uśmiechnięta, z wysoką kulturą osobistą, chętnie dzieli się wiedzą i doświadczeniem z zakresu laseroterapii. Jakimkolwiek zabieg wykonywanym najnowszej generacji laserem diodowym LIGHTSheer® DESIRE, Dominika poprzedza długim i skrupulatnym wywiadem medycznym, zwraca uwagę na wszelkie wskazania depilacją laserową, nie tylko te estetyczne, ale również mające związek z zaburzeniami hormonalnymi. Ponadto dobiera terapię laserową indywidualnie, precyzyjnie starając się wsłuchać w potrzeby każdej Klientki, uwzględniając równocześnie przeciwskazania, ilość trwania sesji, liczbę zabiegów, jak i parametry urządzenia, wyjątkowe dla każdej partii ciała i każdego pacjenta. Dokładna, precyzyjna, profesjonalna, Dominika chętnie włączyła się do projektu realizacji naszego motto estetycznego rozwijania i wspomagania odkrywania piękna ludzkiego ciała„</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
