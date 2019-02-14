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
            'name' => 'Medycyna estetyczna',
            'alias' => 'medycyna-estetyczna',
            'image' => '1.jpg',
            'main_description' => 'Medycyna estetyczna zajmuje się w głównej mierze profilaktyką starzenia się skóry oraz rekonstrukcjami mającymi odtworzyć stan sprzed tego procesu. Mówiąc kompleksowo, poprzez drobne zabiegi jak botoks czy powiększanie ust, ma odświeżyć naszą skórę i pozbyć się defektów. Terapią można poprawić drobne felery estetyczne, które wpływają niepochlebnie na naszą samoocenę – szramy, zapadnięte policzki, zbyt małe piersi, blizny powypadkowe, znamiona dziedziczne itp.'
        ]);

        DB::table('services')->insert([
            'name' => 'Elektrokoagulacja',
            'alias' => 'elektrokoagulacja',
            'image' => '2.jpg',
            'main_description' => 'Zabieg elektrokoagulacji polega na ścinaniu białka zmian skórnych poprzez działanie prądem wysokiej częstotliwości. Wytwarzane w czasie działania prądem ciepło powoduje uszkodzenie (koagulację, ścinanie) białek zlokalizowanych w tkance m.in. włókniaków, brodawek łojotokowych, brodawek płaskich, punktów rubinowych i naczyniaków gwiaździstych.'
        ]);
    }
}
