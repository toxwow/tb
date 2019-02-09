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
            'image' => '1.jpg'
        ]);

        DB::table('services')->insert([
            'name' => 'Elektrokoagulacja',
            'alias' => 'elektrokoagulacja',
            'image' => '2.jpg'
        ]);
    }
}
