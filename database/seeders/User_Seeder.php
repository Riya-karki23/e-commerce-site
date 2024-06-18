<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// added 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        "name"=>"Riya karki",
        "email"=>"rk@gmail.com",
        "password"=>Hash::Make('rk')
        ]);
        
    }
}
