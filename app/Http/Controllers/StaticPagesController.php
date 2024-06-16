<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class StaticPagesController extends Controller
{   
    
    public function home()
    {  
        return view('home');
    }
    public function ListingAll()
    {  
        $listings = Listing::all();
        // $listing = Listing::find(1);
        // return response()->json($listing->images);

        return view('pages/listings',[
            'listings'=>$listings,
        ]);
    }
}
