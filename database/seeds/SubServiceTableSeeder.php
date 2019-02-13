<?php

use Illuminate\Database\Seeder;

class SubServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_services')->insert([
            'service_id' => 1,
            'sub_service_name' => 'Usta – kontur z cieniowaniem',
            'sub_service_alias' => 'usta–kontur-z-cieniowaniem',
            'price' => 1000,
            'time' => 120,
            'description' =>
                "Wiele z nas chciałoby mieć ładniejszy kształt ust, mieć je bardziej pełne i o mocniejszym zabarwieniu. Codzienny ich makijaż jest czasochłonny i mało trwały, rozmazuje się podczas jedzenia i picia. Rozwiązaniem na ten problem jest makijaż permanentny ust – kontur z cieniowaniem. Dzięki niemu optycznie je powiększymy i skorygujemy wszelkie dysproporcje między górną a dolną wargą.

<p class='title'>Jak wygląda zabieg?</p>
Na początek należy wykonać makijaż wstępny, żebyśmy zobaczyły czy końcowy efekt nam się spodoba. Makijaż musi być odpowiedni do naszego wieku, osobowości, urody. Podczas zabiegu hipoalergiczne barwniki są wprowadzane za pomocą specjalnych, delikatnych igieł do zewnętrznych warstw skóry. Wykonywany jest w znieczuleniu miejscowym, dzięki temu zabieg jest bezbolesny. Po około trzech tygodniach konieczne jest wykonanie korekty. Pamiętajmy o tym, że na początku makijaż może być bardzo mocny, jednak po upływie kilkunastu dni widzimy jego efekt końcowy i wygląda wtedy naturalnie, w delikatny sposób podkreśla naszą urodę.

<p class='title'>Kto powinien zrezygnować z makijażu permanentnego ust?</p>
Nie jest on wskazany, jeżeli chorujemy na łuszczycę, mamy czynne zmiany skórne, alergię na barwniki, przyjmujemy leki sterydowe i przeciwzakrzepowe, nie wykonuje się go w czasie menstruacji, jeżeli chorujemy i mamy gorączkę.

<p class='title'>Jakie są efekty zabiegu?</p>
Kontur ust podkreślany jest zgodnie z naturalnym ich kształtem, może być jedynie minimalnie poszerzany. Cieniowanie sprawia, że usta stają się pełniejsze i bardziej wyraziste. Makijaż permanentny świetnie sprawdza się, gdy mamy wąskie wargi, niesymetryczne, z drobnymi niedoskonałościami.",
        ]);

        DB::table('sub_services')->insert([
            'service_id' => 1,
            'sub_service_name' => 'Powieki – kreska górna i dolna',
            'sub_service_alias' => 'powieki-kreska-gorna-i-dolna',
            'price' => 800,
            'time' => 100,
            'description' =>
                "<p class='title'>Kreski górne</p>

Można polecić naprawdę każdemu, nawet jeśli ktoś nigdy nie miał nawet podkreślonego oka –w górnej kresce będzie wyglądać wyraźniej. U każdej Pani i w każdym wieku będą wyglądać świetnie.
Ich kształt i grubość dobierana jest indywidualnie, głównie wg. upodobań Klientki, czasem maluje się próbnie dwie różne, aby klientka miała możliwość wyboru odpowiedniego kształtu.
Kreski  na powiekach górnych robione są pomiędzy rzęsami i lekko wychodzą w górę przy zewnętrznym kąciku oka.Górną kreską możemy zagęścić linię rzęs, podkreślić piękny kształt oka lub też wykonać lekką korektę  oczu z opadającymi do dołu kącikami lub opadającymi powiekami.
Górną kreskę zaznaczamy zawsze mocniej od dolnej, co daje naturalny efekt bardziej gęstych rzęs . Można ją także dodatkowo pogrubić w trakcie trzeciego zabiegu lub też od razu wykonać kreskę górną grubszą, dekoracyjną.

<p class='title'>Kreski dolne</p>

Zanim zrobimy kreskę dolną oka zawsze zapraszamy na konsultację, ponieważ
nie każde oko może wymagać takiej kreski, więc warto przed zabiegiem poradzić się specjalistki. Cieniutka, delikatnie rozszerzająca się na zewnątrz kreseczka dolna, pięknie może nam poszerzyć i powiększyć oko. Najładniej wygląda pomiędzy ciemniejszymi rzęsami. Panie, które nie mogą się pochwalić gęstymi rzęsami na dolnej powiece powinny taką kreseczkę lekko przykrywać ciemniejszym cieniem do powiek dla efektu powiększenia oka.
Dolna i górna kreska nie powinny nigdy  łączyć się ze sobą, aby nie zmniejszyć i nie \"zamknąć\" oka.

Kreska na powiece górnej jak również  na powiece dolnej optycznie powiększa oczy i wzmacnia ich oprawę. Ponadto dzięki Twoje rzęsy będą wydawać się grubsze, a oczy bardziej podkreślone.Tto idealne rozwiązanie dla Kobiet noszących szkła kontaktowe i okulary oraz dla wszystkich tych, które chcą zaoszczędzić swój cenny czas.

<p class='title'>Znieczulenie</p>

W czasie zabiegu hypoalargiczne barwniki zostaję wprowadzone za pomocą delikatnych igieł kartridźowych do zewnętrznych warstw skóry. Przy każdej ingerencji w skórę odczuwa się niewielki ból. Dlatego już na  samym początku dokonuje znieczulenia miejscowego (maść Emla) gwarantującego bezbolesność. Podczas zabiegu pacjentka cały czas ma aplikowane znieczulenie co zapewnia komfort i pozwala się zrelaksować, a linergistce zapewnia perfekcyjność wykonania makijażu permanentnego. Bezbolesność gwarantuje również urządzenie , które używamy do wykonania zabiegu. Cechuje się ono nadzwyczajną precyzją, którą osiągnięto dzięki wykorzystaniu najnowszej technologii.

<p class='title'>Zaraz po zabiegu</p>

Pomimo zachowania przez nas powyższych środków ostrożności, w nielicznych przypadkach, uzależnionych od tendencji każdej osoby może dojść do niewielkiego obrzęku i podrażnienia, ale jest to normalne, a objawy szybko ustępują. Już następnego dnia po zabiegu można się bez problemu pokazać w pracy. W 2-3 dni po zabiegu naskórek zaczyna się złuszczać, stąd bardzo ważne jest stałe nawilżanie .Po zabiegu zabarwienie jest wyjątkowo intensywne, mimo to nie należy się tym niepokoić ponieważ  4-5 dni po zabiegu zabarwienie blednie o 50% natężenia wyjściowego, Końcowy odcień koloru w większości przypadków (tendencje osobnicze) nie będzie identyczny z kolorem wzornika. W skrajnych przypadkach naskórek nie przyjmuje żadnego barwnika. Dobór koloru jest dopasowany w pełni do typu urody i osobowości.",
        ]);

        DB::table('sub_services')->insert([
            'service_id' => 2,
            'sub_service_name' => 'Pojedyncza zmiana',
            'sub_service_alias' => 'pojedyncza-zmiana',
            'price' => 50,
            'time' => 30,
            'description' =>
                "Zabieg elektrokoagulacji polega na ścinaniu białka zmian skórnych poprzez działanie prądem wysokiej częstotliwości. Wytwarzane w czasie działania prądem ciepło powoduje uszkodzenie (koagulację, ścinanie) białek zlokalizowanych w tkance m.in. włókniaków, brodawek łojotokowych, brodawek płaskich, punktów rubinowych i naczyniaków gwiaździstych.

W trakcie zabiegu powstaje temperatura sięgająca 200 stopni C. Do zabiegu używa się aparatu zaopatrzonego w metalową elektrodę. Elektrody podlegają sterylizacji po każdym użyciu.

<p class='title'>Jak poznać, że zmiany skórne kwalifikują się do zabiegu elektrokoagulacji?</p>
Brodawki płaskie są wywołane przez wirus. Występują głównie na dłoniach i twarzy w postaci drobnych jasnych lub brunatnych guzków o płaskiej powierzchni. Brodawki wykazują skłonność do szybkiego rozsiewania się. Najlepiej udać się do kosmetologa po pojawieniu się pierwszych brodawek.
<p class='title'>Jak wykonywany jest zabieg i ile trwa?</p>
Przed zabiegiem niezbędna jest konsultacja z kosmetologiem, który oceni czy powstałe zmiany kwalifikują się do zabiegu elektrokoagulacji. Pacjent zostaje poinformowany o czynnościach związanych z zabiegiem, przeciwwskazaniach i postępowaniu po zabiegu.

Starsze aparaty wymagały bolesnego wkłuwania się w zmianę. Elektrokoagulacja YASUMI polega jedynie na przyłożeniu elektrody do zmiany, co znacznie zmniejsza dyskomfort pacjenta.

Usuwanie włókniaków, punktów rubinowych i brodawek to zabieg szybki. Czas usuwania jednej zmiany to kilkanaście sekund do około minuty.

Zabieg wymaga bardzo dużej precyzji i ciągłego skupienia kosmetologa, z uwagi na co nie przeprowadzamy go dłużej niż kilanaście minut. Do czasu zabiegu nie wliczamy dokładnego oczyszczenia skóry i konsultacji.


",
        ]);
    }
}
