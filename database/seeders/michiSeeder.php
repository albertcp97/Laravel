<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class michiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Michi')->insert([
           'nom'=>'Napo Jesus de la Rosa Martinez Lopez',
        ]);


        DB::table('Michi')->insert([
            'nom'=>'Benito Camela',
        ]);


        DB::table('Michi')->insert([
            'IdMichi'=>1,
            'nom'=>'Pochita',
        ]);
    }
}
