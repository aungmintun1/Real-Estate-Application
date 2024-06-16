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
                'squarefootage' => 1200,
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

        DB::table('listings')->insert([
            'title' => 'Luxury Apartment with City View',
            'address' => '456 Elm St Apt 12',
            'city' => 'Anytown',
            'state' => 'CA',
            'type' => 'Apartment',
            'zipcode' => 90211,
            'bedrooms' => '2',
            'bathrooms' => '1',
            'squarefootage' => 900,
            'description' => 'A modern apartment with stunning city views.',
            'slug' => Str::slug('456 Elm St Apt 12 Anytown CA'),
            'price' => 2500,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Air Conditioning', 'TV Cable', 'Refrigerator']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Cozy Cottage Near Beach',
            'address' => '789 Pine St',
            'city' => 'Anytown',
            'state' => 'CA',
            'type' => 'Cottage',
            'zipcode' => 90212,
            'bedrooms' => '2',
            'bathrooms' => '1',
            'squarefootage' => 800,
            'description' => 'A charming cottage within walking distance to the beach.',
            'slug' => Str::slug('789 Pine St Anytown CA'),
            'price' => 3500,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Lawn', 'Outdoor Shower', 'Microwave']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Spacious Downtown Condo',
            'address' => '101 Maple St Apt 8',
            'city' => 'Anytown',
            'state' => 'CA',
            'type' => 'Condo',
            'zipcode' => 90213,
            'bedrooms' => '3',
            'bathrooms' => '2',
            'squarefootage' => 1500,
            'description' => 'A spacious condo located in the heart of downtown.',
            'slug' => Str::slug('101 Maple St Apt 8 Anytown CA'),
            'price' => 5000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Swimming Pool', 'Washer', 'WiFi']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Modern Loft in Historic Building',
            'address' => '202 Oak St Apt 3',
            'city' => 'Anytown',
            'state' => 'CA',
            'type' => 'Loft',
            'zipcode' => 90214,
            'bedrooms' => '1',
            'bathrooms' => '1',
            'squarefootage' => 700,
            'description' => 'A modern loft in a beautifully restored historic building.',
            'slug' => Str::slug('202 Oak St Apt 3 Anytown CA'),
            'price' => 3000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Barbeque', 'Dryer', 'Sauna']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Charming Bungalow with Private Yard',
            'address' => '303 Birch St',
            'city' => 'Anytown',
            'state' => 'CA',
            'type' => 'Bungalow',
            'zipcode' => 90215,
            'bedrooms' => '2',
            'bathrooms' => '1',
            'squarefootage' => 950,
            'description' => 'A charming bungalow with a private fenced yard.',
            'slug' => Str::slug('303 Birch St Anytown CA'),
            'price' => 4000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Gym', 'Microwave', 'Laundry']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Elegant Townhouse with Modern Amenities',
            'address' => '404 Cedar St',
            'city' => 'Anytown',
            'state' => 'CA',
            'type' => 'Townhouse',
            'zipcode' => 90216,
            'bedrooms' => '3',
            'bathrooms' => '2.5',
            'squarefootage' => 1600,
            'description' => 'An elegant townhouse with modern amenities and spacious living areas.',
            'slug' => Str::slug('404 Cedar St Anytown CA'),
            'price' => 6000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Air Conditioning', 'Window Coverings', 'Washer']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Contemporary Studio in Trendy Neighborhood',
            'address' => '505 Walnut St Apt 5',
            'city' => 'Anytown',
            'state' => 'CA',
            'type' => 'Studio',
            'zipcode' => 90217,
            'bedrooms' => '0',
            'bathrooms' => '1',
            'squarefootage' => 500,
            'description' => 'A contemporary studio apartment in a trendy neighborhood.',
            'slug' => Str::slug('505 Walnut St Apt 5 Anytown CA'),
            'price' => 2000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['TV Cable', 'Lawn', 'WiFi']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Rustic Cabin in the Woods',
            'address' => '606 Pinecone Rd',
            'city' => 'Anytown',
            'state' => 'CA',
            'type' => 'Cabin',
            'zipcode' => 90218,
            'bedrooms' => '1',
            'bathrooms' => '1',
            'squarefootage' => 600,
            'description' => 'A rustic cabin nestled in the woods, perfect for nature lovers.',
            'slug' => Str::slug('606 Pinecone Rd Anytown CA'),
            'price' => 2500,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Fire Pit', 'Wood Stove', 'Wraparound Porch']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Spacious Ranch with Open Floor Plan',
            'address' => '707 Meadow Ln',
            'city' => 'Anytown',
            'state' => 'CA',
            'type' => 'Ranch',
            'zipcode' => 90219,
            'bedrooms' => '4',
            'bathrooms' => '3',
            'squarefootage' => 2000,
            'description' => 'A spacious ranch with an open floor plan and large backyard.',
            'slug' => Str::slug('707 Meadow Ln Anytown CA'),
            'price' => 7000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Swimming Pool', 'Gym', 'Laundry']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Penthouse with Panoramic Views',
            'address' => '808 Skyline Dr Apt PH',
            'city' => 'Anytown',
            'state' => 'CA',
            'type' => 'Penthouse',
            'zipcode' => 90220,
            'bedrooms' => '3',
            'bathrooms' => '3',
            'squarefootage' => 2500,
            'description' => 'A luxurious penthouse with panoramic views of the city.',
            'slug' => Str::slug('808 Skyline Dr Apt PH Anytown CA'),
            'price' => 10000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Private Elevator', 'Terrace', 'Jacuzzi']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
    }
}
