<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Listing;
use App\Models\ListingImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helper\Helper;
class ListingController extends Controller
{
    public function index()
    {  
        $user= Auth::user();

        $listings = Listing::where('user_id', $user->id)->get();
        // $listing = Listing::find(1);
        // return response()->json($listing->images);

        return view('pages/myListings',[
            'listings'=>$listings,
        ]);
    }

    public function create()
    {  
        return view('pages/create');
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'title' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'type' => 'required | string',
            'zipcode' => 'required|integer',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'squarefootage' => 'required|integer',
            'description' => 'sometimes|string',
            'price' => 'required|numeric',
            'features' => 'sometimes|array',
            'features.*' => 'string|max:255', // Each feature must be a string, with a max length
            'status' => 'required|string|max:255',
        ]);

  
        
        $listing = new Listing();
        $listing->user_id = $user->id;
        $listing->title = $request->get('title');
        $listing->address = $request->get('address');
        $listing->city = $request->get('city');
        $listing->state = $request->get('state');
        $listing->type = $request->get('type');
        $listing->zipcode = $request->get('zipcode');
        $listing->bedrooms = $request->get('bedrooms');
        $listing->bathrooms = $request->get('bathrooms');
        $listing->squarefootage = $request->get('squarefootage');
        $listing->description = $request->get('description');
        $listing->features = $request->features ?? []; 
        $listing->price = $request->get('price');
        $listing->status = $request->get('status');
        $listing->slug = Helper::slugify("{$request->address}-{$request->address2}-{$request->city}-{$request->state}-{$request->zipcode}");
        $listing->save();


        $filePath = public_path('uploads');

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
             
                $imageName = $image->getClientOriginalName();
                $image->move($filePath, $imageName);

                // Create and save the image path in the database
                $listingImage = new ListingImage([
                    'listing_id' => $listing->id,
                    'image' => $imageName
                ]);
                $listingImage->save();
            }
        }



        return redirect('/listings');
    }

    public function show($id){

        $listing = Listing::find($id);

        return view('pages/singleListing',['listing'=>$listing]);

    }

    public function edit($id){

        $listing = Listing::find($id);

        
        return view('pages/edit',['listing'=>$listing]);

    }

    public function update(Request $request, $id)
    {
        $listing = Listing::find($id);
        
        request()->validate([
            'title' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'type' => 'required | string',
            'zipcode' => 'required|integer',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'squarefootage' => 'required|integer',
            'description' => 'sometimes|string',
            'price' => 'required|numeric',
            'features' => 'sometimes|array',
            'features.*' => 'string|max:255', // Each feature must be a string, with a max length
            'status' => 'required|string|max:255',
        ]);

      
        $listing->title = $request->get('title');
        $listing->address = $request->get('address');
        $listing->city = $request->get('city');
        $listing->state = $request->get('state');
        $listing->type = $request->get('type');
        $listing->zipcode = $request->get('zipcode');
        $listing->bedrooms = $request->get('bedrooms');
        $listing->bathrooms = $request->get('bathrooms');
        $listing->squarefootage = $request->get('squarefootage');
        $listing->description = $request->get('description');
        $listing->features = $request->features ?? []; 
        $listing->price = $request->get('price');
        $listing->status = $request->get('status');
        $listing->slug = Helper::slugify("{$request->address}-{$request->address2}-{$request->city}-{$request->state}-{$request->zipcode}");
        $listing->save();

        $filePath = public_path('uploads');

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
             
                $imageName = $image->getClientOriginalName();
                $image->move($filePath, $imageName);

                // Create and save the image path in the database
                $listingImage = new ListingImage([
                    'listing_id' => $listing->id,
                    'image' => $imageName
                ]);
                $listingImage->save();
            }
        }

        

 
        return redirect('/listings');
    }


    public function destroy($id)
    {
        $listing=Listing::find($id);

        $listing->delete();

        return redirect('/listings');
    
    }

    public function destroyImage($id)
    {
        $image=ListingImage::find($id);
        $listing_id = $image->listing_id;

        $image->delete();

        return redirect('/listings/' . $listing_id . '/edit');
    
    }
    
}

       // $filePath = public_path('uploads');
        // if ($request->hasfile('photo')) {
        //     $file = $request->file('photo');
        //     $file_name = time() . $file->getClientOriginalName();
        //     $file->move($filePath, $file_name);
        //     $listing->photo = $file_name;
        //     }