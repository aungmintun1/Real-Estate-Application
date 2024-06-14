<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
{
    public function index()
    {  
        $listings = Listing::all();
        return view('pages/listings',[
            'listings'=>$listings,
        ]);
    }
}
