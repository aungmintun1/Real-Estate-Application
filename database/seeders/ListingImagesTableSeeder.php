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
            for ($i = 1; $i <= 20; $i++) {
            DB::table('listing_images')->insert([
                [
                    'image' => 'home1.jpg',
                    'listing_id' => $i,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now()
                ],
            ]);
        
            DB::table('listing_images')->insert([
                [
                    'image' => 'home2.jpg',
                    'listing_id' => $i,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now()
                ],
            ]);
        
            DB::table('listing_images')->insert([
                [
                    'image' => 'home3.jpg',
                    'listing_id' => $i,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now()
                ],
            ]);
            DB::table('listing_images')->insert([
                [
                    'image' => 'home4.jpg',
                    'listing_id' => $i,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now()
                ],
            ]);
            DB::table('listing_images')->insert([
                [
                    'image' => 'home5.jpg',
                    'listing_id' => $i,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now()
                ],
            ]);
            DB::table('listing_images')->insert([
                [
                    'image' => 'home6.jpg',
                    'listing_id' => $i,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now()
                ],
            ]);
            DB::table('listing_images')->insert([
                [
                    'image' => 'home7.jpg',
                    'listing_id' => $i,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now()
                ],
            ]);
        }

        for ($i = 21; $i <= 30; $i++) {
            DB::table('listing_images')->insert([
                [
                    'image' => 'a1.jpg',
                    'listing_id' => $i,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now()
                ],
            ]);
            DB::table('listing_images')->insert([
                [
                    'image' => 'a2.jpg',
                    'listing_id' => $i,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now()
                ],
            ]);
            DB::table('listing_images')->insert([
                [
                    'image' => 'a3.jpg',
                    'listing_id' => $i,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now()
                ],
            ]);
            DB::table('listing_images')->insert([
                [
                    'image' => 'a4.jpg',
                    'listing_id' => $i,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now()
                ],
            ]);
            DB::table('listing_images')->insert([
                [
                    'image' => 'a5.jpg',
                    'listing_id' => $i,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now()
                ],
            ]);
        }

        for ($i = 31; $i <= 40; $i++) {
            DB::table('listing_images')->insert([
                [
                    'image' => 'c1.jpg',
                    'listing_id' => $i,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now()
                ],
            ]);
            DB::table('listing_images')->insert([
                [
                    'image' => 'c2.jpg',
                    'listing_id' => $i,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now()
                ],
            ]);
            DB::table('listing_images')->insert([
                [
                    'image' => 'c3.jpg',
                    'listing_id' => $i,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now()
                ],
            ]);
            DB::table('listing_images')->insert([
                [
                    'image' => 'c4.jpg',
                    'listing_id' => $i,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now()
                ],
            ]);
            DB::table('listing_images')->insert([
                [
                    'image' => 'c5.jpg',
                    'listing_id' => $i,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now()
                ],
            ]);
        }

        for ($i = 41; $i <= 50; $i++) {
            DB::table('listing_images')->insert([
                [
                    'image' => 'b1.jpg',
                    'listing_id' => $i,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now()
                ],
            ]);
            DB::table('listing_images')->insert([
                [
                    'image' => 'b2.jpg',
                    'listing_id' => $i,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now()
                ],
            ]);
            DB::table('listing_images')->insert([
                [
                    'image' => 'b3.jpg',
                    'listing_id' => $i,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now()
                ],
            ]);
            DB::table('listing_images')->insert([
                [
                    'image' => 'b4.jpg',
                    'listing_id' => $i,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now()
                ],
            ]);
            DB::table('listing_images')->insert([
                [
                    'image' => 'b5.jpg',
                    'listing_id' => $i,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now()
                ],
            ]);
        }

        for ($i = 51; $i <= 53; $i++) {
            DB::table('listing_images')->insert([
                [
                    'image' => 'home1.jpg',
                    'listing_id' => $i,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now()
                ],
            ]);
        
            DB::table('listing_images')->insert([
                [
                    'image' => 'home2.jpg',
                    'listing_id' => $i,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now()
                ],
            ]);
        
            DB::table('listing_images')->insert([
                [
                    'image' => 'home3.jpg',
                    'listing_id' => $i,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now()
                ],
            ]);
            DB::table('listing_images')->insert([
                [
                    'image' => 'home4.jpg',
                    'listing_id' => $i,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now()
                ],
            ]);
            DB::table('listing_images')->insert([
                [
                    'image' => 'home5.jpg',
                    'listing_id' => $i,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now()
                ],
            ]);
        }

        
    }
}
