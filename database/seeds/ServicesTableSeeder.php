<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'name' => 'Makijaż permanentny',
            'alias' => 'makijaz-permanentny',
            'image' => '1.png',
            'main_description' => '
            Makijaż permanentny (Permanent make-up) stanowi świetne rozwiązanie dla osób, które pragną podkreślić swoje atuty urody lub skorygować lub zatuszować ewentualne niedoskonałości.  Jest doskonałym rozwiązaniem dla kobiet chcących zaoszczędzić czas podczas porannej toalety, dla tych, które pragną wyglądać nienagannie w każdych okolicznościach, czy to na basenie, czy na plaży, o każdej porze dnia.
            '
        ]);

        DB::table('services')->insert([
            'name' => 'Odnowa biologiczna THALGO',
            'alias' => 'odnowa-biologiczna-thalgo',
            'image' => '2.png',
            'main_description' => 'Francuska kosmetyczna marka Thalgo, to jedna z najbardziej znanych i cenionych na całym świecie profesjonalnych marek kosmetycznych, autor holistycznej filozofii, a także wielu patentów, które zrewolucjonizowały profesjonalny rynek kosmetyczny. Ponad 40-letnie doświadczenie, bogata oferta zabiegowa i najwyższej jakości preparaty na bazie alg i innych morskich składników sprawiły, że już od wielu lat firma Thalgo jest również światowym potentatem w dziedzinie SPA i Thalassoterapii. Z logo Thalgo pracują najbardziej prestiżowe hotele m.in. Burj-Al.-Arab Tower w Dubaju, Le Meridien Limassol na Cyprze, Blue Palace na Krecie, The Oriental Bangkok w Tajlandii, Villa Thalgo w Australii.'
        ]);

        DB::table('services')->insert([
            'name' => 'Peelingi',
            'alias' => 'Peelingi',
            'image' => '3.png',
            'main_description' => 'Głęboko oczyszczający zabieg, który usuwa obumarły naskórek. W efekcie skóra  jest rozświetlona, odświeżona. Zabieg sprzyja wchłanianiu substancji aktywnych  z kosmetyków. Skóra po zabiegu jest  wygładzona, ujędrniona i nawilżona.'
        ]);

        DB::table('services')->insert([
            'name' => 'Medycyna estetyczna',
            'alias' => 'medycyna-estetyczna',
            'image' => '4.png',
            'main_description' => '
                W ofercie znajdą Państwo:
                <ul>
                    <li>konsultacja</li>
                    <li>botox</li>
                    <li>kwas hialuronowy</li>
                    <li>nici</li>
                    <li>hydroksyapatyt</li>
                    <li>lifting De Maio</li>
                    <li>Lip Flip</li>
                    <li>indycza szyja</li>
                    <li>korekta dołów skroniowych i łuków jarzmowych</li>
                    <li>wolumetria</li>
                    <li>podkreślenie linii żuchwy</li>
                    <li>modelowanie kształtu i objętości ust</li>
                    <li>lifting twarzy</li>
                    <li>rewitalizacja skóry, zagęszczenie, eliminacja drobnych zmarszczek</li>
                    <li>dodawanie objętości</li>
                    <li>korekta kształtu nosa</li>
                    <li>rewitalizacja dłoni</li>
                    <li>usuwanie zmarszczek mimicznych</li>
                    <li>zabiegi na okolice oczu</li>
                    <li>lipoliza iniekcyjna</li>
                    </ul>

            '
        ]);
    }
}
