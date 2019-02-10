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
                '<p> Lorem ipsum dolor sane </p><h1>Elo elo</h1>',
        ]);

        DB::table('sub_services')->insert([
            'service_id' => 1,
            'sub_service_name' => 'Powieki – kreska górna i dolna',
            'sub_service_alias' => 'powieki-kreska-gorna-i-dolna',
            'price' => 800,
            'time' => 100,
            'description' =>
                '<p> Lorem ipsum dolor sane </p><h1>Elo elo</h1>',
        ]);

        DB::table('sub_services')->insert([
            'service_id' => 2,
            'sub_service_name' => 'Pojedyncza zmiana',
            'sub_service_alias' => 'pojedyncza-zmiana',
            'price' => 50,
            'time' => 30,
            'description' =>
                '<p> Lorem ipsum dolor sane </p><h1>Elo elo</h1>',
        ]);
    }
}
