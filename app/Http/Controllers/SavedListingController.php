<?php

namespace App\Http\Controllers;
use App\Models\Listing;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SavedListingController extends Controller
{

    public function store($id){
        $user = Auth::user();
        $listing = Listing::findOrFail($id);

        
      // Check if the listing is already saved to avoid duplication
      if (!$user->savedListings->contains($listing->id)) {
        $user->savedListings()->attach($listing);
        $status = 'saved';
    } else {
        $status = 'exists';
    }

    return response()->json(['status' => $status]);
    // Check if the listing is already saved to avoid duplication

    }
    public function destroy($id)
    {
        $user = Auth::user();
        $listing = Listing::findOrFail($id);

        $user->savedListings()->detach($listing);
        //deletes the object in the pivot table 
        
        return redirect('/users/favorites');
    }
}
