<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Carbon\Carbon;

class SavedListingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('listing_user')->insert([
            'listing_id'=>1,
            'user_id' => 1,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
    ]);

    DB::table('listing_user')->insert([
        'listing_id'=>2,
        'user_id' => 1,
        'updated_at' => Carbon::now(), 
        'created_at' => Carbon::now()
    ]);

    DB::table('listing_user')->insert([
        'listing_id'=>3,
        'user_id' => 1,
        'updated_at' => Carbon::now(), 
        'created_at' => Carbon::now()
    ]);

    }
}
