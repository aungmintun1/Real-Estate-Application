<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Carbon\Carbon;
class ListingImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('listing_images')->insert([
            [   'image' => 'home1.jpg',
                'listing_id'=> 1,
                'updated_at' => Carbon::now(), 
                'created_at' => Carbon::now()
            ],
        ]);

        DB::table('listing_images')->insert([
            [   'image' => 'home2.jpg',
                'listing_id'=> 1,
                'updated_at' => Carbon::now(), 
                'created_at' => Carbon::now()
            ],
        ]);

        DB::table('listing_images')->insert([
            [   'image' => 'home3.jpg',
                'listing_id'=> 1,
                'updated_at' => Carbon::now(), 
                'created_at' => Carbon::now()
            ],
        ]);
    }
}