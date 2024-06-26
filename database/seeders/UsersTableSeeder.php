<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB; 
use Faker\Factory as Faker;
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

        DB::table('users')->insert([
            'name' => 'matt',
            'email' => 'matt@gmail.com',
            'password' => Hash::make('password'),
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);

        $faker = Faker::create();
        foreach(range(1,7) as $index){
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('password'),
                'updated_at' => $faker->dateTimeThisMonth('now', 'America/New_York'), 
                'created_at' => $faker->dateTimeThisMonth('now', 'America/New_York')
            ]);
        }
    }
}
