<?php

namespace App\Http\Controllers;
use App\Models\Listing;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SavedListingController extends Controller
{
    public function destroy($id)
    {
        $user = Auth::user();
        $listing = Listing::findOrFail($id);

        $user->savedListings()->detach($listing);
        //deletes the object in the pivot table 
        
        return redirect('/users/favorites');
    }
}
