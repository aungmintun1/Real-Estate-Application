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
                'offer' => 'sale',
                'zipcode' => 90210,
                'bedrooms' => '3',
                'bathrooms' => '2',
                'squarefootage' => 1200,
                'description' => 'A lovely three-bedroom house with a spacious backyard.',
                'slug' => Str::slug('123 Main St Apt 4 Anytown CA'),
                'price' => 130000,
                'status' => 'Published',
                'user_id' => 1,
                'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym']),  
                'updated_at' => Carbon::now(), 
                'created_at' => Carbon::now()
            ],
        ]);

        DB::table('listings')->insert([
            [   'title' => 'New York House',
                'address' => '123 Main St',
                'city' => 'Anytown',
                'state' => 'CA',
                'type' => 'House',
                'offer' => 'sale',
                'zipcode' => 90210,
                'bedrooms' => '3',
                'bathrooms' => '2',
                'squarefootage' => 1200,
                'description' => 'A lovely three-bedroom house with a spacious backyard.',
                'slug' => Str::slug('123 Main St Apt 4 Anytown CA'),
                'price' => 150000,
                'status' => 'Published',
                'user_id' => 1,
                'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym']),  
                'updated_at' => Carbon::now(), 
                'created_at' => Carbon::now()
            ],
        ]);

        
        DB::table('listings')->insert([
            [   'title' => 'New Jersey House',
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
                'price' => 219000,
                'status' => 'Published',
                'user_id' => 1,
                'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym']),  
                'updated_at' => Carbon::now(), 
                'created_at' => Carbon::now()
            ],
        ]);

                
        DB::table('listings')->insert([
            [   'title' => 'Blue House',
                'address' => '123 Main St',
                'city' => 'Anytown',
                'state' => 'CA',
                'type' => 'House',
                'offer' => 'sale',
                'zipcode' => 90210,
                'bedrooms' => '3',
                'bathrooms' => '2',
                'squarefootage' => 1200,
                'description' => 'A lovely three-bedroom house with a spacious backyard.',
                'slug' => Str::slug('123 Main St Apt 4 Anytown CA'),
                'price' => 250000,
                'status' => 'Published',
                'user_id' => 1,
                'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym']),  
                'updated_at' => Carbon::now(), 
                'created_at' => Carbon::now()
            ],
        ]);
        DB::table('listings')->insert([
            [   'title' => 'Grey House',
                'address' => '123 Main St',
                'city' => 'Anytown',
                'state' => 'CA',
                'type' => 'House',
                'offer' => 'sale',
                'zipcode' => 90210,
                'bedrooms' => '3',
                'bathrooms' => '2',
                'squarefootage' => 1200,
                'description' => 'A lovely three-bedroom house with a spacious backyard.',
                'slug' => Str::slug('123 Main St Apt 4 Anytown CA'),
                'price' => 179000,
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
            'offer' => 'rent',
            'zipcode' => 90211,
            'bedrooms' => '2',
            'bathrooms' => '1',
            'squarefootage' => 900,
            'description' => 'A modern apartment with stunning city views.',
            'slug' => Str::slug('456 Elm St Apt 12 Anytown CA'),
            'price' => 2500,
            'status' => 'Published',
            'user_id' => 2,
            'features' => json_encode(['Air Conditioning', 'TV Cable', 'Refrigerator']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Cozy Cottage Near Beach',
            'address' => '789 Pine St',
            'city' => 'Anytown',
            'state' => 'CA',
            'type' => 'House',
            'offer' => 'rent',
            'zipcode' => 90212,
            'bedrooms' => '2',
            'bathrooms' => '1',
            'squarefootage' => 800,
            'description' => 'A charming cottage within walking distance to the beach.',
            'slug' => Str::slug('789 Pine St Anytown CA'),
            'price' => 3000,
            'status' => 'Published',
            'user_id' => 2,
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
            'offer' => 'rent',
            'zipcode' => 90213,
            'bedrooms' => '3',
            'bathrooms' => '2',
            'squarefootage' => 1500,
            'description' => 'A spacious condo located in the heart of downtown.',
            'slug' => Str::slug('101 Maple St Apt 8 Anytown CA'),
            'price' => 2000,
            'status' => 'Published',
            'user_id' => 3,
            'features' => json_encode(['Swimming Pool', 'Washer', 'WiFi']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Modern Loft in Historic Building',
            'address' => '202 Oak St Apt 3',
            'city' => 'Anytown',
            'state' => 'CA',
            'type' => 'apartment',
            'offer' => 'rent',
            'zipcode' => 90214,
            'bedrooms' => '1',
            'bathrooms' => '1',
            'squarefootage' => 700,
            'description' => 'A modern loft in a beautifully restored historic building.',
            'slug' => Str::slug('202 Oak St Apt 3 Anytown CA'),
            'price' => 3000,
            'status' => 'Published',
            'user_id' => 3,
            'features' => json_encode(['Gtm', 'Dryer', 'Sauna']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Charming Bungalow with Private Yard',
            'address' => '303 Birch St',
            'city' => 'Anytown',
            'state' => 'CA',
            'type' => 'Bungalow',
            'offer' => 'sale',
            'zipcode' => 90215,
            'bedrooms' => '2',
            'bathrooms' => '1',
            'squarefootage' => 950,
            'description' => 'A charming bungalow with a private fenced yard.',
            'slug' => Str::slug('303 Birch St Anytown CA'),
            'price' => 240000,
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
            'type' => 'House',
            'offer' => 'sale',
            'zipcode' => 90216,
            'bedrooms' => '3',
            'bathrooms' => '2',
            'squarefootage' => 1600,
            'description' => 'An elegant townhouse with modern amenities and spacious living areas.',
            'slug' => Str::slug('404 Cedar St Anytown CA'),
            'price' => 200000,
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
            'type' => 'Apartment',
            'offer' => 'rent',
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
            'type' => 'House',
            'offer' => 'rent',
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
            'title' => 'Spacious Ranch',
            'address' => '707 Meadow Ln',
            'city' => 'Anytown',
            'state' => 'CA',
            'type' => 'House',
            'offer' => 'sale',
            'zipcode' => 90219,
            'bedrooms' => '4',
            'bathrooms' => '3',
            'squarefootage' => 2000,
            'description' => 'A spacious ranch with an open floor plan and large backyard.',
            'slug' => Str::slug('707 Meadow Ln Anytown CA'),
            'price' => 300000,
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
            'type' => 'House',
            'offer' => 'sale',
            'zipcode' => 90220,
            'bedrooms' => '3',
            'bathrooms' => '3',
            'squarefootage' => 2500,
            'description' => 'A luxurious penthouse with panoramic views of the city.',
            'slug' => Str::slug('808 Skyline Dr Apt PH Anytown CA'),
            'price' => 419000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Private Elevator', 'Terrace', 'Jacuzzi']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('listings')->insert([
            'title' => 'Charming Bungalow with Private Garden',
            'address' => '100 Maple St',
            'city' => 'Greentown',
            'state' => 'OH',
            'type' => 'Bungalow',
            'offer' => 'sale',
            'zipcode' => 44701,
            'bedrooms' => '3',
            'bathrooms' => '2',
            'squarefootage' => 1800,
            'description' => 'A charming bungalow with a private garden and modern amenities.',
            'slug' => Str::slug('100 Maple St Greentown OH'),
            'price' => 450000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Lawn', 'Dryer', 'Microwave']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Stylish Loft in the Heart of the City',
            'address' => '150 Urban Dr Apt 5C',
            'city' => 'Metropolis',
            'state' => 'IL',
            'type' => 'Apartment',
            'offer' => 'rent',
            'zipcode' => 62960,
            'bedrooms' => '2',
            'bathrooms' => '1',
            'squarefootage' => 1200,
            'description' => 'A stylish loft located in the vibrant downtown area.',
            'slug' => Str::slug('150 Urban Dr Apt 5C Metropolis IL'),
            'price' => 2000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['WiFi', 'Gym', 'Barbeque']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Elegant Villa with Infinity Pool',
            'address' => '200 Seaside Ln',
            'city' => 'Bayview',
            'state' => 'CA',
            'type' => 'House',
            'offer' => 'sale',
            'zipcode' => 94005,
            'bedrooms' => '5',
            'bathrooms' => '4',
            'squarefootage' => 3500,
            'description' => 'An elegant villa featuring an infinity pool and luxurious amenities.',
            'slug' => Str::slug('200 Seaside Ln Bayview CA'),
            'price' => 499999,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Swimming Pool', 'Refrigerator', 'Window Coverings']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Cozy Cabin in the Woods',
            'address' => '300 Forest Rd',
            'city' => 'Woodland',
            'state' => 'WA',
            'type' => 'House',
            'offer' => 'sale',
            'zipcode' => 98674,
            'bedrooms' => '2',
            'bathrooms' => '1',
            'squarefootage' => 950,
            'description' => 'A cozy cabin nestled in the woods, perfect for a peaceful retreat.',
            'slug' => Str::slug('300 Forest Rd Woodland WA'),
            'price' => 280000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Laundry', 'Microwave', 'Sauna']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Modern Townhouse with Rooftop',
            'address' => '400 Sunset Blvd Apt 1A',
            'city' => 'Sunset City',
            'state' => 'CA',
            'type' => 'House',
            'offer' => 'sale',
            'zipcode' => 90210,
            'bedrooms' => '3',
            'bathrooms' => '2',
            'squarefootage' => 2200,
            'description' => 'A modern townhouse with a rooftop deck offering stunning views.',
            'slug' => Str::slug('400 Sunset Blvd Apt 1A Sunset City CA'),
            'price' => 700000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Barbeque', 'Air Conditioning', 'WiFi']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Ranch House in Queens Village',
            'address' => '500 Ranch Rd',
            'city' => 'Countryside',
            'state' => 'TX',
            'type' => 'House',
            'offer' => 'sale',
            'zipcode' => 75001,
            'bedrooms' => '4',
            'bathrooms' => '3',
            'squarefootage' => 2800,
            'description' => 'A spacious ranch with an open floor plan and modern finishes.',
            'slug' => Str::slug('500 Ranch Rd Countryside TX'),
            'price' => 680000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Outdoor Shower', 'Refrigerator', 'Washer']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Beachfront Condo with Stunning Views',
            'address' => '600 Beachfront Dr Apt 2B',
            'city' => 'Seaside',
            'state' => 'FL',
            'type' => 'Condo',
            'offer' => 'sale',
            'zipcode' => 32459,
            'bedrooms' => '2',
            'bathrooms' => '2',
            'squarefootage' => 1300,
            'description' => 'A beachfront condo offering stunning views and direct beach access.',
            'slug' => Str::slug('600 Beachfront Dr Apt 2B Seaside FL'),
            'price' => 820000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Swimming Pool', 'TV Cable', 'Window Coverings']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Historic Brownstone with Original Features',
            'address' => '700 Heritage Ln',
            'city' => 'Oldtown',
            'state' => 'NY',
            'type' => 'House',
            'offer' => 'sale',
            'zipcode' => 10002,
            'bedrooms' => '4',
            'bathrooms' => '3',
            'squarefootage' => 2400,
            'description' => 'A historic brownstone with original features and modern updates.',
            'slug' => Str::slug('700 Heritage Ln Oldtown NY'),
            'price' => 700000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Laundry', 'Gym', 'Air Conditioning']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Rustic Farmhouse with Expansive Land',
            'address' => '800 Country Ln',
            'city' => 'Ruralville',
            'state' => 'IA',
            'type' => 'House',
            'offer' => 'sale',
            'zipcode' => 50322,
            'bedrooms' => '5',
            'bathrooms' => '3',
            'squarefootage' => 3000,
            'description' => 'A rustic farmhouse with expansive land and modern comforts.',
            'slug' => Str::slug('800 Country Ln Ruralville IA'),
            'price' => 650000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Lawn', 'Swimming Pool', 'Sauna']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Apartment Studio in Manhattan',
            'address' => '900 Skyline Dr Apt 18F',
            'city' => 'Uptown',
            'state' => 'CA',
            'type' => 'Apartment',
            'offer' => 'rent',
            'zipcode' => 90012,
            'bedrooms' => '1',
            'bathrooms' => '1',
            'squarefootage' => 700,
            'description' => 'A contemporary studio apartment with stunning city views.',
            'slug' => Str::slug('900 Skyline Dr Apt 18F Uptown CA'),
            'price' => 3500,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['WiFi', 'Microwave', 'TV Cable']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('listings')->insert([
            'title' => '2 Bedroom Apartment in Downtown LA',
            'address' => '123 Main St Apt 4B',
            'city' => 'Downtown',
            'state' => 'CA',
            'type' => 'Loft',
            'offer' => 'rent',
            'zipcode' => 90013,
            'bedrooms' => '1',
            'bathrooms' => '1',
            'squarefootage' => 800,
            'description' => 'A cozy loft apartment in the heart of Downtown LA.',
            'slug' => Str::slug('123 Main St Apt 4B Downtown CA'),
            'price' => 3200,
            'status' => 'Draft',
            'user_id' => 1,
            'features' => json_encode(['WiFi', 'TV Cable', 'Gym']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Modern Condo in Beverly Hills',
            'address' => '456 Sunset Blvd Apt 7C',
            'city' => 'Beverly Hills',
            'state' => 'CA',
            'type' => 'Condo',
            'offer' => 'sale',
            'zipcode' => 90210,
            'bedrooms' => '2',
            'bathrooms' => '2',
            'squarefootage' => 1200,
            'description' => 'A modern condo with luxurious amenities in Beverly Hills.',
            'slug' => Str::slug('456 Sunset Blvd Apt 7C Beverly Hills CA'),
            'price' => 500000,
            'status' => 'Draft',
            'user_id' => 1,
            'features' => json_encode(['WiFi', 'Pool', 'Gym']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Spacious House in Santa Monica',
            'address' => '789 Ocean Ave',
            'city' => 'Santa Monica',
            'state' => 'CA',
            'type' => 'House',
            'offer' => 'sale',
            'zipcode' => 90401,
            'bedrooms' => '3',
            'bathrooms' => '2',
            'squarefootage' => 1500,
            'description' => 'A spacious house with ocean views in Santa Monica.',
            'slug' => Str::slug('789 Ocean Ave Santa Monica CA'),
            'price' => 360000,
            'status' => 'Draft',
            'user_id' => 1,
            'features' => json_encode(['WiFi', 'Garage', 'Garden']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        
    }
}
