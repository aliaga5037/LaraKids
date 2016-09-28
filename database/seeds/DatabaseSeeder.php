<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
        	'name'=> 'Leyla',
        	'email'=> 'leyla.a@code.edu.az',
        	'password'=> bcrypt('1234567890'),


        	]);
    }
}
