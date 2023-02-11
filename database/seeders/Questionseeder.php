<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Questionseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'user_id' => '1',
            'university_id' => '1',
            'text' => '会場の雰囲気はどんな感じですか？',
            ]);
        DB::table('questions')->insert([
            'user_id' => '2',
            'university_id' => '2',
            'text' => '最寄り駅から徒歩何分ですか？',
            ]);    
        DB::table('questions')->insert([
            'user_id' => '3',
            'university_id' => '3',
            'text' => '会場は寒いですか？',
            ]);
        DB::table('questions')->insert([
            'user_id' => '4',
            'university_id' => '4',
            'text' => '去年の平均点は何点ですか？',
            ]);
        DB::table('questions')->insert([
            'user_id' => '5',
            'university_id' => '5',
            'text' => '会場の近くには何かありますか？',
            ]);
        DB::table('questions')->insert([
            'user_id' => '6',
            'university_id' => '6',
            'text' => '当日会場は混みますか？',
            ]);
        DB::table('questions')->insert([
            'user_id' => '7',
            'university_id' => '7',
            'text' => '一つの教室に何人くらいいますか？',
            ]);
        DB::table('questions')->insert([
            'user_id' => '8',
            'university_id' => '8',
            'text' => '合格発表はいつですか？',
            ]);
    }
}
