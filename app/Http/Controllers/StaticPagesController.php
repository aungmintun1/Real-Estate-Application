<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaticPagesController extends Controller
{   
    
    public function home()
    {  
        return view('home');
    }
    public function ListingAll()
    {  
        $user = Auth::user();
        // return response()->json($user->savedListings);

        $listings = Listing::paginate(6); 
        $paginationUrls = $listings->getUrlRange(1, $listings->lastPage());
        // return response()->json($listings->getUrlRange(1, $listings->lastPage()));

        return view('pages/listings',[
            'listings'=>$listings,
            'user'=>$user,
            'paginationUrls'=>$paginationUrls,
        ]);
    }

    public function search()
    {  
        return view('pages/search');
    }

    public function contact()
    {  
        return view('pages/contact');
    }

    public function about()
    {  
        return view('pages/about');
    }

    public function results()
    {  
        $listings = Listing::all();
        return view('pages/results' ,[
            'listings'=>$listings
        ]);
    }
}
