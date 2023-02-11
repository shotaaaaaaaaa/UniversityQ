<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'ユーザー1',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password')
            ]);
        DB::table('users')->insert([
            'name' => 'ユーザー2',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password')
            ]);
        DB::table('users')->insert([
            'name' => 'ユーザー3',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password')
            ]);    
        DB::table('users')->insert([
            'name' => 'ユーザー4',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password')
            ]);
        DB::table('users')->insert([
            'name' => 'ユーザー5',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password')
            ]);
        DB::table('users')->insert([
            'name' => 'ユーザー6',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password')
            ]);
        DB::table('users')->insert([
            'name' => 'ユーザー7',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password')
            ]);
        DB::table('users')->insert([
            'name' => 'ユーザー8',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password')
            ]);
    }
}
