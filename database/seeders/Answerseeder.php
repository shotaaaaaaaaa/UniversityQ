<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Answerseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
            'user_id' => '1',
            'question_id' => '1',
            'text' => '大きな会場で行います。',
            ]);
        DB::table('answers')->insert([
            'user_id' => '2',
            'question_id' => '3',
            'text' => '暖房がついています。',
            ]);
        DB::table('answers')->insert([
            'user_id' => '3',
            'question_id' => '5',
            'text' => 'コンビニがあります。',
            ]);
        DB::table('answers')->insert([
            'user_id' => '4',
            'question_id' => '7',
            'text' => '30人ほど。',
            ]);
    }
}
