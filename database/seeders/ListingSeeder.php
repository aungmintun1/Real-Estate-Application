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
                'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
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
                'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
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
                'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
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
                'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
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
                'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),   
                'updated_at' => Carbon::now(), 
                'created_at' => Carbon::now()
            ],
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
            'features' =>json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
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
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
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
            'features' =>json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
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
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
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
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
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
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
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
            'features' =>json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
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
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
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
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
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
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
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
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('listings')->insert([
            'title' => 'House in Long Island',
            'address' => '789 Ocean Ave',
            'city' => 'Santa Monica',
            'state' => 'CA',
            'type' => 'House',
            'offer' => 'sale',
            'zipcode' => 90401,
            'bedrooms' => '3',
            'bathrooms' => '2',
            'squarefootage' => 1500,
            'description' => 'A spacious house in Long Island.',
            'slug' => Str::slug('789 Ocean Ave Santa Monica CA'),
            'price' => 360000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('listings')->insert([
            'title' => 'House in Staten Island',
            'address' => '789 Ocean Ave',
            'city' => 'Santa Monica',
            'state' => 'CA',
            'type' => 'House',
            'offer' => 'sale',
            'zipcode' => 90401,
            'bedrooms' => '3',
            'bathrooms' => '2',
            'squarefootage' => 1500,
            'description' => 'A spacious house in Staten Island.',
            'slug' => Str::slug('789 Ocean Ave Santa Monica CA'),
            'price' => 360000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        
        DB::table('listings')->insert([
            'title' => 'Resilient Brick Home in Rosedale',
            'address' => '789 Ocean Ave',
            'city' => 'Santa Monica',
            'state' => 'CA',
            'type' => 'House',
            'offer' => 'sale',
            'zipcode' => 90401,
            'bedrooms' => '3',
            'bathrooms' => '2',
            'squarefootage' => 1500,
            'description' => 'A spacious house in Staten Island.',
            'slug' => Str::slug('789 Ocean Ave Santa Monica CA'),
            'price' => 360000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('listings')->insert([
            'title' => 'Home in Sunnyside North',
            'address' => '789 Ocean Ave',
            'city' => 'Santa Monica',
            'state' => 'CA',
            'type' => 'House',
            'offer' => 'sale',
            'zipcode' => 90401,
            'bedrooms' => '3',
            'bathrooms' => '2',
            'squarefootage' => 1500,
            'description' => 'A spacious house in Staten Island.',
            'slug' => Str::slug('789 Ocean Ave Santa Monica CA'),
            'price' => 360000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        //apartments

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
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym','Washer', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable', 'Window Coverings', 'Sauna']),  
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
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym','Washer', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable', 'Window Coverings', 'Sauna']),  
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

                    
        DB::table('listings')->insert([
            'title' => 'Apartment Studio in Queens',
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
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym','Washer', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable', 'Window Coverings', 'Sauna']),  
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

                      
        DB::table('listings')->insert([
            'title' => 'Apartment Studio in Maspeth',
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
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym','Washer', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable', 'Window Coverings', 'Sauna']),  
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

                      
        DB::table('listings')->insert([
            'title' => 'Apartment Studio in Broadway',
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
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym','Washer', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable', 'Window Coverings', 'Sauna']),  
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('listings')->insert([
            'title' => 'Modern Loft in Historic Building',
            'address' => '202 Oak St Apt 3',
            'city' => 'Anytown',
            'state' => 'CA',
            'type' => 'Apartment',
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
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym','Washer', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable', 'Window Coverings', 'Sauna']),  
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
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym','Washer', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable', 'Window Coverings', 'Sauna']),  
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
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym','Washer', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable', 'Window Coverings', 'Sauna']),  
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('listings')->insert([
            'title' => '2 Bedroom Apartment in Downtown LA',
            'address' => '123 Main St Apt 4B',
            'city' => 'Downtown',
            'state' => 'CA',
            'type' => 'Apartment',
            'offer' => 'rent',
            'zipcode' => 90013,
            'bedrooms' => '1',
            'bathrooms' => '1',
            'squarefootage' => 800,
            'description' => 'A cozy loft apartment in the heart of Downtown LA.',
            'slug' => Str::slug('123 Main St Apt 4B Downtown CA'),
            'price' => 3200,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym','Washer', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable', 'Window Coverings', 'Sauna']),  
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('listings')->insert([
            'title' => '1 Bedroom Apartment in China Town NY',
            'address' => '123 Main St Apt 4B',
            'city' => 'Downtown',
            'state' => 'CA',
            'type' => 'Apartment',
            'offer' => 'rent',
            'zipcode' => 90013,
            'bedrooms' => '1',
            'bathrooms' => '1',
            'squarefootage' => 800,
            'description' => 'A cozy loft apartment in the heart of Downtown LA.',
            'slug' => Str::slug('123 Main St Apt 4B Downtown CA'),
            'price' => 3200,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym','Washer', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable', 'Window Coverings', 'Sauna']),  
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);


        //Condos
        
        DB::table('listings')->insert([
            'title' => 'Cozy Condo Near Beach',
            'address' => '789 Pine St',
            'city' => 'Anytown',
            'state' => 'CA',
            'type' => 'Condo',
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
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
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
            'features' =>json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
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
            'features' =>json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
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
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
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
            'price' => 550000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Luxury Condo in Malibu',
            'address' => '789 Ocean View Dr',
            'city' => 'Malibu',
            'state' => 'CA',
            'type' => 'Condo',
            'offer' => 'sale',
            'zipcode' => 90265,
            'bedrooms' => '5',
            'bathrooms' => '4',
            'squarefootage' => 4500,
            'description' => 'A luxury villa with stunning ocean views in Malibu.',
            'slug' => Str::slug('789 Ocean View Dr Malibu CA'),
            'price' => 2500000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Charming Condo in Santa Monica',
            'address' => '321 Beach St',
            'city' => 'Santa Monica',
            'state' => 'CA',
            'type' => 'Condo',
            'offer' => 'sale',
            'zipcode' => 90401,
            'bedrooms' => '3',
            'bathrooms' => '2',
            'squarefootage' => 1800,
            'description' => 'A charming bungalow near the beach in Santa Monica.',
            'slug' => Str::slug('321 Beach St Santa Monica CA'),
            'price' => 1200000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Spacious Condo in Pasadena',
            'address' => '654 Maple Ave',
            'city' => 'Pasadena',
            'state' => 'CA',
            'type' => 'Condo',
            'offer' => 'sale',
            'zipcode' => 91101,
            'bedrooms' => '4',
            'bathrooms' => '3',
            'squarefootage' => 3000,
            'description' => 'A spacious family home in a quiet neighborhood in Pasadena.',
            'slug' => Str::slug('654 Maple Ave Pasadena CA'),
            'price' => 850000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Modern Condo in Downtown LA',
            'address' => '123 Main St Apt 8D',
            'city' => 'Los Angeles',
            'state' => 'CA',
            'type' => 'Condo',
            'offer' => 'sale',
            'zipcode' => 90012,
            'bedrooms' => '2',
            'bathrooms' => '2',
            'squarefootage' => 1500,
            'description' => 'A modern Condo with city views in Downtown LA.',
            'slug' => Str::slug('123 Main St Apt 8D Los Angeles CA'),
            'price' => 900000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Elegant Condo in San Francisco',
            'address' => '987 Market St',
            'city' => 'San Francisco',
            'state' => 'CA',
            'type' => 'Condo',
            'offer' => 'sale',
            'zipcode' => 94103,
            'bedrooms' => '3',
            'bathrooms' => '2',
            'squarefootage' => 2000,
            'description' => 'An elegant townhouse with modern amenities in San Francisco.',
            'slug' => Str::slug('987 Market St San Francisco CA'),
            'price' => 1500000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        


        //bungalows

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
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Charming Bungalow with Garden',
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
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('listings')->insert([
            'title' => 'Spacious Bungalow with Large Backyard',
            'address' => '200 Oak St',
            'city' => 'Springfield',
            'state' => 'IL',
            'type' => 'Bungalow',
            'offer' => 'sale',
            'zipcode' => 62701,
            'bedrooms' => '4',
            'bathrooms' => '3',
            'squarefootage' => 2200,
            'description' => 'A spacious bungalow with a large backyard and modern amenities.',
            'slug' => Str::slug('200 Oak St Springfield IL'),
            'price' => 550000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Cozy Bungalow near Downtown',
            'address' => '300 Pine St',
            'city' => 'Rivertown',
            'state' => 'NJ',
            'type' => 'Bungalow',
            'offer' => 'sale',
            'zipcode' => 07601,
            'bedrooms' => '2',
            'bathrooms' => '1',
            'squarefootage' => 1600,
            'description' => 'A cozy bungalow near downtown with modern amenities.',
            'slug' => Str::slug('300 Pine St Rivertown NJ'),
            'price' => 400000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Modern Bungalow with Open Floor Plan',
            'address' => '400 Cedar St',
            'city' => 'Lakeside',
            'state' => 'MI',
            'type' => 'Bungalow',
            'offer' => 'sale',
            'zipcode' => 49116,
            'bedrooms' => '3',
            'bathrooms' => '2',
            'squarefootage' => 1900,
            'description' => 'A modern bungalow with an open floor plan and modern amenities.',
            'slug' => Str::slug('400 Cedar St Lakeside MI'),
            'price' => 470000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Elegant Bungalow with Hardwood Floors',
            'address' => '500 Birch St',
            'city' => 'Mapleton',
            'state' => 'VA',
            'type' => 'Bungalow',
            'offer' => 'sale',
            'zipcode' => 24350,
            'bedrooms' => '3',
            'bathrooms' => '2',
            'squarefootage' => 2000,
            'description' => 'An elegant bungalow with hardwood floors and modern amenities.',
            'slug' => Str::slug('500 Birch St Mapleton VA'),
            'price' => 480000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Charming Bungalow with Fireplace',
            'address' => '600 Elm St',
            'city' => 'Willowbrook',
            'state' => 'NY',
            'type' => 'Bungalow',
            'offer' => 'sale',
            'zipcode' => 10001,
            'bedrooms' => '3',
            'bathrooms' => '2',
            'squarefootage' => 2100,
            'description' => 'A charming bungalow with a fireplace and modern amenities.',
            'slug' => Str::slug('600 Elm St Willowbrook NY'),
            'price' => 490000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Luxury Bungalow with Pool',
            'address' => '700 Spruce St',
            'city' => 'Meadowville',
            'state' => 'FL',
            'type' => 'Bungalow',
            'offer' => 'sale',
            'zipcode' => 33101,
            'bedrooms' => '4',
            'bathrooms' => '3',
            'squarefootage' => 2300,
            'description' => 'A luxury bungalow with a pool and modern amenities.',
            'slug' => Str::slug('700 Spruce St Meadowville FL'),
            'price' => 600000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Renovated Bungalow with Garden',
            'address' => '800 Poplar St',
            'city' => 'Rosewood',
            'state' => 'TX',
            'type' => 'Bungalow',
            'offer' => 'sale',
            'zipcode' => 75001,
            'bedrooms' => '3',
            'bathrooms' => '2',
            'squarefootage' => 1800,
            'description' => 'A renovated bungalow with a garden and modern amenities.',
            'slug' => Str::slug('800 Poplar St Rosewood TX'),
            'price' => 460000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('listings')->insert([
            'title' => 'Classic Bungalow with Porch',
            'address' => '900 Walnut St',
            'city' => 'Pineville',
            'state' => 'NC',
            'type' => 'Bungalow',
            'offer' => 'sale',
            'zipcode' => 28134,
            'bedrooms' => '3',
            'bathrooms' => '2',
            'squarefootage' => 1700,
            'description' => 'A classic bungalow with a porch and modern amenities.',
            'slug' => Str::slug('900 Walnut St Pineville NC'),
            'price' => 430000,
            'status' => 'Published',
            'user_id' => 1,
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        

        //drafts



        DB::table('listings')->insert([
            'title' => 'House in Ronkonkoma',
            'address' => '789 Ocean Ave',
            'city' => 'Santa Monica',
            'state' => 'CA',
            'type' => 'House',
            'offer' => 'sale',
            'zipcode' => 90401,
            'bedrooms' => '3',
            'bathrooms' => '2',
            'squarefootage' => 1500,
            'description' => 'A spacious house in Staten Island.',
            'slug' => Str::slug('789 Ocean Ave Santa Monica CA'),
            'price' => 360000,
            'status' => 'Draft',
            'user_id' => 1,
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        
        DB::table('listings')->insert([
            'title' => ' Brick Home in Brooklyn',
            'address' => '789 Ocean Ave',
            'city' => 'Santa Monica',
            'state' => 'CA',
            'type' => 'House',
            'offer' => 'sale',
            'zipcode' => 90401,
            'bedrooms' => '3',
            'bathrooms' => '2',
            'squarefootage' => 1500,
            'description' => 'A spacious house in Staten Island.',
            'slug' => Str::slug('789 Ocean Ave Santa Monica CA'),
            'price' => 360000,
            'status' => 'Draft',
            'user_id' => 1,
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('listings')->insert([
            'title' => 'Home in Upstate NY',
            'address' => '789 Ocean Ave',
            'city' => 'Santa Monica',
            'state' => 'CA',
            'type' => 'House',
            'offer' => 'sale',
            'zipcode' => 90401,
            'bedrooms' => '3',
            'bathrooms' => '2',
            'squarefootage' => 1500,
            'description' => 'A spacious house in Staten Island.',
            'slug' => Str::slug('789 Ocean Ave Santa Monica CA'),
            'price' => 360000,
            'status' => 'Draft',
            'user_id' => 1,
            'features' => json_encode(['Air Conditioning', 'Dryer', 'Gym', 'Lawn', 'Barbeque', 'Laundry', 'Refrigerator', 'WiFi', 'Swimming Pool', 'TV Cable']),  
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
 
        

        

        
        
    }
}
