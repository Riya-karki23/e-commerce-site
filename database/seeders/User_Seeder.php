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
        "name"=>"1",
        "email"=>"rkk@gmail.com",
        "password"=>Hash::Make('1')
        ]);
        
    }
}
