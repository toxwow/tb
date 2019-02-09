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
            'name' => 'Usta – kontur z cieniowaniem',
            'alias' => 'usta–kontur-z-cieniowaniem',
            'price' => 1000,
            'time' => 120,
            'description' =>
                '<p> Lorem ipsum dolor sane </p><h1>Elo elo</h1>',
        ]);

        DB::table('sub_services')->insert([
            'service_id' => 1,
            'name' => 'Powieki – kreska górna i dolna',
            'alias' => 'powieki-kreska-gorna-i-dolna',
            'price' => 800,
            'time' => 100,
            'description' =>
                '<p> Lorem ipsum dolor sane </p><h1>Elo elo</h1>',
        ]);

        DB::table('sub_services')->insert([
            'service_id' => 2,
            'name' => 'Pojedyncza zmiana',
            'alias' => 'pojedyncza-zmiana',
            'price' => 50,
            'time' => 30,
            'description' =>
                '<p> Lorem ipsum dolor sane </p><h1>Elo elo</h1>',
        ]);
    }
}
