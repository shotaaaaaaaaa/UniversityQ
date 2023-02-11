<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Universityseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('universities')->insert([
            'category_id' => '1',
            'name' => '東京大学',
            ]);
        DB::table('universities')->insert([
            'category_id' => '2',
            'name' => '慶應大学',
            ]);
        DB::table('universities')->insert([
            'category_id' => '1',
            'name' => '一橋大学',
            ]);
        DB::table('universities')->insert([
            'category_id' => '2',
            'name' => '早稲田大学',
            ]);
        DB::table('universities')->insert([
            'category_id' => '3',
            'name' => '京都大学',
            ]);
        DB::table('universities')->insert([
            'category_id' => '3',
            'name' => '大阪大学',
            ]);
        DB::table('universities')->insert([
            'category_id' => '4',
            'name' => '同志社大学'
            ]);
        DB::table('universities')->insert([
            'category_id' => '4',
            'name' => '立命館大学',
            ]);
    }
}
