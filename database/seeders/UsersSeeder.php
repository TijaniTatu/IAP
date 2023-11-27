<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Tijani', 
                'email' => 'riekotijani@gmail.com',
                'password' => bcrypt('password'),
               'gender' => 'male',
               'role' => 'admin',
            ],
            [
                'name' => 'Zubeir', 
                'email' => 'zubeir@gmail.com',
                'password' => bcrypt('password'),
               'gender' => 'male',
               'role' => 'admin',
            ],
            [
                'name' => 'Mike', 
                'email' => 'mike@gmail.com',
                'password' => bcrypt('password'),
               'gender' => 'male',
               'role' => 'user',
            ],
            
           
        ]);
    }
}