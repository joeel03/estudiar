<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('places')->insert([
            'name' => 'mongolo',
            'description'=>'el ivan'
        ]);
        DB::table('places')->insert([
            'name' => 'panvhit',
            'description'=>'fsadfd'
        ]);
    }
}
