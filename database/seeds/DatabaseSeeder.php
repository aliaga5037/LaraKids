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
        // DB::table('admins')->insert([
        //     'name'=> 'Leyla',
        //     'email'=> 'leyla.a@code.edu.az',
        //     'password'=> bcrypt('1234567890'),


        //     ]);
        // DB::table('hekimlers')->insert([
        //     'name'=> 'Leyla',
        //     'surname'=> 'Abbasova',
        //     'email'=> 'leyla.a@box.az',
        //     'password'=> bcrypt('1234567890'),
        //     'about'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam a laudantium consectetur rerum, tempora voluptatem dolore officia voluptatum impedit cumque minima eaque aspernatur ipsa? Repellendus facilis culpa, mollitia cumque possimus.'
        //     ]);
        DB::table('hekimlers')->insert([
            'name'=> 'Murad',
            'surname'=> 'Mikayilzadə',
            'email'=> 'm.murad2@code.edu.az',
            'password'=> bcrypt('muradmikayilzadeh'),
            'about'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam a laudantium consectetur rerum, tempora voluptatem dolore officia voluptatum impedit cumque minima eaque aspernatur ipsa? Repellendus facilis culpa, mollitia cumque possimus.'
            ]);
    }
}   