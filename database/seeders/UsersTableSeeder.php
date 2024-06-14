<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB; 
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'aung',
            'email' => 'aung@gmail.com',
            'password' => Hash::make('password'),
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'john',
            'email' => 'john@gmail.com',
            'password' => Hash::make('password'),
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
    }
}
