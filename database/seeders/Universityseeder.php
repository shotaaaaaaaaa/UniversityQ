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
        DB::table('universities')->insert([
            'category_id' => '1',
            'name' => '東京工業大学',
            ]);
        DB::table('universities')->insert([
            'category_id' => '1',
            'name' => '横浜国立大学',
            ]);
        DB::table('universities')->insert([
            'category_id' => '1',
            'name' => '千葉大学',
            ]);
        DB::table('universities')->insert([
            'category_id' => '1',
            'name' => '埼玉大学',
            ]);
        DB::table('universities')->insert([
            'category_id' => '1',
            'name' => '筑波大学',
            ]);
        DB::table('universities')->insert([
            'category_id' => '1',
            'name' => '山梨大学',
            ]);
        DB::table('universities')->insert([
            'category_id' => '2',
            'name' => '上智大学',
            ]);
        DB::table('universities')->insert([
            'category_id' => '2',
            'name' => '明治大学',
            ]);
        DB::table('universities')->insert([
            'category_id' => '2',
            'name' => '青山学院大学',
            ]);
        DB::table('universities')->insert([
            'category_id' => '2',
            'name' => '立教大学',
            ]);
        DB::table('universities')->insert([
            'category_id' => '2',
            'name' => '法政大学',
            ]);
        DB::table('universities')->insert([
            'category_id' => '3',
            'name' => '神戸大学',
            ]);
        DB::table('universities')->insert([
            'category_id' => '3',
            'name' => '大阪市立大学',
            ]);
        DB::table('universities')->insert([
            'category_id' => '3',
            'name' => '大阪府立大学',
            ]);
        DB::table('universities')->insert([
            'category_id' => '4',
            'name' => '関西大学',
            ]);
        DB::table('universities')->insert([
            'category_id' => '4',
            'name' => '関西学院大学',
            ]);
        DB::table('universities')->insert([
            'category_id' => '4',
            'name' => '近畿大学',
            ]);
        DB::table('universities')->insert([
            'category_id' => '4',
            'name' => '京都産業大学',
            ]);
    }
}
