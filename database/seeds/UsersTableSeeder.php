<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin',
            'password' => bcrypt('Mistrz1234!'),
        ]);

        DB::table('users')->insert([
            'name' => 'Anna Taborska',
            'email' => 'AnnaTaborska',
            'password' => bcrypt('Ania1978!'),
        ]);
    }
}
