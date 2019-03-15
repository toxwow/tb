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
            'name' => 'Makijaż pernamentny',
            'path' => '1.jpg',
            'alias' => 'makijaz-pernamentny',
            'alt' => 'alt-description',
        ]);

        DB::table('photos')->insert([
            'name' => 'Makijaż pernamentny',
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
            'name' => 'Makijaż pernamentny',
            'path' => '4.jpg',
            'alias' => 'makijaz-pernamentny',
            'alt' => 'alt-description',
        ]);

        DB::table('photos')->insert([
            'name' => 'Makijaż pernamentny',
            'path' => '5.jpg',
            'alias' => 'makijaz-pernamentny',
            'alt' => 'alt-description',
        ]);

        DB::table('photos')->insert([
            'name' => 'Medycyna estetyczna',
            'path' => '6.jpg',
            'alias' => 'medycyna-estetycza',
            'alt' => 'alt-description',
        ]);

        DB::table('photos')->insert([
            'name' => 'Medycyna estetyczna',
            'path' => '7.jpg',
            'alias' => 'medycyna-estetycza',
            'alt' => 'alt-description',
        ]);

        DB::table('photos')->insert([
            'name' => 'Medycyna estetyczna',
            'path' => '8.jpg',
            'alias' => 'medycyna-estetycza',
            'alt' => 'alt-description',
        ]);

        DB::table('photos')->insert([
            'name' => 'Medycyna estetyczna',
            'path' => '9.jpg',
            'alias' => 'medycyna-estetycza',
            'alt' => 'alt-description',
        ]);

        DB::table('photos')->insert([
            'name' => 'Medycyna estetyczna',
            'path' => '10.jpg',
            'alias' => 'medycyna-estetycza',
            'alt' => 'alt-description',
        ]);

        DB::table('photos')->insert([
            'name' => 'Makijaż pernamentny',
            'path' => '11.jpg',
            'alias' => 'makijaz-pernamentny',
            'alt' => 'alt-description',
        ]);

        DB::table('photos')->insert([
            'name' => 'Makijaż pernamentny',
            'path' => '12.jpg',
            'alias' => 'makijaz-pernamentny',
            'alt' => 'alt-description',
        ]);

        DB::table('photos')->insert([
            'name' => 'Makijaż pernamentny',
            'path' => '13.jpg',
            'alias' => 'makijaz-pernamentny',
            'alt' => 'alt-description',
        ]);

        DB::table('photos')->insert([
            'name' => 'Makijaż pernamentny',
            'path' => '14.jpg',
            'alias' => 'makijaz-pernamentny',
            'alt' => 'alt-description',
        ]);

        DB::table('photos')->insert([
            'name' => 'Makijaż pernamentny',
            'path' => '15.jpg',
            'alias' => 'makijaz-pernamentny',
            'alt' => 'alt-description',
        ]);
    }
}
