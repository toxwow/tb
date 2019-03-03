<?php

use Illuminate\Database\Seeder;

class PricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prices')->insert([
            'service_id' => '1',
            'name' => 'Usta – kontur z cieniowaniem',
            'price' => '1000 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '1',
            'name' => 'Usta – kontur z wypełnieniem',
            'price' => '1000 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '1',
            'name' => 'Powieki – kreska górna i dolna',
            'price' => '800 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '1',
            'name' => 'Powieki – kreska górna',
            'price' => '700 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '1',
            'name' => 'Powieki – kreska dolna',
            'price' => '700 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '1',
            'name' => 'Brwi metodą nanowłosów + podcień',
            'price' => '1200 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '1',
            'name' => 'Brwi metodą nanowłosów',
            'price' => '1000 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '1',
            'name' => 'Brwi metodą ombre',
            'price' => '800 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '1',
            'name' => 'Brwi pigmentacja męska',
            'price' => '1200 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '1',
            'name' => 'Usuwanie makijażu permanentnego',
            'price' => 'od 200 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '2',
            'name' => 'Zabieg intensywnie nawilżający (ABSOLUTE HYDRATION RITUAL)',
            'price' => '230 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '2',
            'name' => 'Zabieg nawilżająco-upiększający (BEAUTY HYDRATION RITUAL)',
            'price' => '140 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '2',
            'name' => 'Zabieg do skóry szarej i zmęczonej (AQUARELLE)',
            'price' => '150 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '2',
            'name' => 'Zabieg regenerująco - odżywczy (COLD CREAM MARINE RITUAL)',
            'price' => '230 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '2',
            'name' => 'Zabieg na okolice oczu (EYE EXPERT TREATMENT)',
            'price' => '100 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '2',
            'name' => 'Ekspresowy zabieg upiększający (ILLUMINATING RADIANCE FACIAL TREATMENT)',
            'price' => '150 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '2',
            'name' => 'Zabieg na " pierwsze zmarszczki" (MARINE COLLAGEN TREATMENT)',
            'price' => '260 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '2',
            'name' => 'intensywny zabieg na bazie kwasu hialuronowego (MARINE HYALURONIC TREATMENT)',
            'price' => '290 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '2',
            'name' => 'luksusowy zabieg odmładzajaco-liftingujacy (MARINE SILICIUM TREATMENT)',
            'price' => '330 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '2',
            'name' => 'Oczyszczajacy zabieg młodzieżowy (PURETE CLEANSING TREATMENT)',
            'price' => '140 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '2',
            'name' => 'Oczyszczająco- przeciwtrądzikowy rytuał (PURETE MARINE RITUAL)',
            'price' => '210 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '2',
            'name' => 'Zabieg balansujący (RE - BALANCING TREATMENT)',
            'price' => '160 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '2',
            'name' => 'Odnowa i odmłodzenie skóry (RENOVATION RADICALE TREATMENT)',
            'price' => '330 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '3',
            'name' => 'PEELING PQ AGE EVOLUTION',
            'price' => '350 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '3',
            'name' => '-V Carbon - Croma',
            'price' => '350 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '3',
            'name' => 'Ferulac classic z wit. C - twarz',
            'price' => '200 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '3',
            'name' => 'Ferulac classic z wit. C - twarz + szyja',
            'price' => '250 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '3',
            'name' => 'Ferulac classic z wit. C - twarz + szyja + dekolt',
            'price' => '280 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '3',
            'name' => 'Ferulac Peel Booster - medi+derma - twarz',
            'price' => '250 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '3',
            'name' => 'Ferulac Peel Booster - medi+derma - twarz + szyja',
            'price' => '300 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '3',
            'name' => 'Ferulac Peel Booster - medi+derma - twarz + szyja + dekolt',
            'price' => '350 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '3',
            'name' => 'Peeling węglowy Q-switch',
            'price' => '300 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '3',
            'name' => 'Mikrodermabrazja diamentowa - twarz',
            'price' => '100 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '3',
            'name' => 'Mikrodermabrazja diamentowa - twarz + szyja',
            'price' => '130 zł',
            'time' => '120',
        ]);

        DB::table('prices')->insert([
            'service_id' => '3',
            'name' => 'Mikrodermabrazja diamentowa - twarz + szyja + dekolt',
            'price' => '150 zł',
            'time' => '120',
        ]);
    }
}
