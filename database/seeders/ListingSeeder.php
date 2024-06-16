<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Str;
use Carbon\Carbon;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('listings')->insert([
            [   'title' => 'Beautiful 2 Story House',
                'address' => '123 Main St',
                'city' => 'Anytown',
                'state' => 'CA',
                'type' => 'House',
                'zipcode' => 90210,
                'bedrooms' => '3',
                'bathrooms' => '2',
                'squarefootage' => '1200',
                'description' => 'A lovely three-bedroom house with a spacious backyard.',
                'slug' => Str::slug('123 Main St Apt 4 Anytown CA'),
                'price' => 13000,
                'status' => 'Published',
                'user_id' => 1,
                'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym']),  
                'updated_at' => Carbon::now(), 
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
