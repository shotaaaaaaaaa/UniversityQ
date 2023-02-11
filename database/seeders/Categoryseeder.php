<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        'name' => '関東国公立',
        ]);
        DB::table('categories')->insert([
        'name' => '関東私立',
        ]);
        DB::table('categories')->insert([
        'name' => '関西国公立',
        ]);
        DB::table('categories')->insert([
        'name' => '関西私立',
        ]);
    }
}
