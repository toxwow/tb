<?php

use Illuminate\Database\Seeder;

class PhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            'name' => 'Medycyna estetyczna',
            'path' => '1.jpg',
            'alias' => 'medycyna-estetyczna',
            'alt' => 'alt-description',
        ]);

        DB::table('photos')->insert([
            'name' => 'Elektrokoagulacja',
            'path' => '2.jpg',
            'alias' => 'elektrokoagulacja',
            'alt' => 'alt-description',
        ]);

        DB::table('photos')->insert([
            'name' => 'Makijaż pernamentny',
            'path' => '3.jpg',
            'alias' => 'makijaz-pernamentny',
            'alt' => 'alt-description',
        ]);

        DB::table('photos')->insert([
            'name' => 'Elektrokoagulacja',
            'path' => '4.jpg',
            'alias' => 'elektrokoagulacja',
            'alt' => 'alt-description',
        ]);
    }
}
