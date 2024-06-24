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
   
        if($user->roles[0]->title == 'Admin'){
            $listings= Listing::all();
        }

        if($user->roles[0]->title == 'Agent'){
            $listings = Listing::where('user_id', $user->id)->get();
        }

        if($user->roles[0]->title == 'User'){
           return redirect('listings/all');
        }

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
        $authUser = Auth::user();

        if($authUser->roles[0]->title=='Admin' || $listing->user_id==$authUser->id){
            
            return view('pages/edit',[
                'listing'=>$listing
            ]);
        }

        else{
            return redirect('/users/error');
        }
        


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

        $image->delete();

        $status = 'deleted';
        return response()->json(['status' => $status]);

    }
    public function search(Request $request)
    {
        // Validate the inputs
        $request->validate([
            'title' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'type' => 'nullable|string|max:255',
            'min_price' => 'nullable|numeric|min:0',
            'max_price' => 'nullable|numeric|min:0',
            'bathrooms' => 'nullable|integer|min:0',
            'bedrooms' => 'nullable|integer|min:0',
            'min_area' => 'nullable|string|min:0',
            'max_area' => 'nullable|string|min:0',
        ]);

        // Start with the base query
        $query = Listing::query();

        // Apply filters based on the request inputs
        if ($request->filled('title')) {
            $query->where('title', 'LIKE', '%' . $request->input('title') . '%');
        }

        if ($request->filled('address')) {
            $query->where('address', 'LIKE', '%' . $request->input('address') . '%');
        }

        if ($request->filled('status')) {
            $query->where('status', $request->input('status'));
        }

        if ($request->filled('type')) {
            $query->where('type', $request->input('type'));
        }

        if ($request->filled('min_price') && $request->filled('max_price')) {
            $query->whereBetween('price', [$request->input('min_price'), $request->input('max_price')]);
        } elseif ($request->filled('min_price')) {
            $query->where('price', '>=', $request->input('min_price'));
        } elseif ($request->filled('max_price')) {
            $query->where('price', '<=', $request->input('max_price'));
        }

        if ($request->filled('bathrooms')) {
            $query->where('bathrooms', '>=', $request->input('bathrooms'));
        }

        if ($request->filled('bedrooms')) {
            $query->where('bedrooms', '>=', $request->input('bedrooms'));
        }

        if ($request->filled('min_area') && $request->filled('max_area')) {
            $query->whereBetween('squarefootage', [$request->input('min_area'), $request->input('max_area')]);
        } elseif ($request->filled('min_area')) {
            $query->where('squarefootage', '>=', $request->input('min_area'));
        } elseif ($request->filled('max_area')) {
            $query->where('squarefootage', '<=', $request->input('max_area'));
        }

        // Execute the query and get the results
        $realEstateListings = $query->orderBy('price', 'asc')->paginate(6);
        $realEstateListings->appends($request->all());
    
        $paginationUrls = $realEstateListings->getUrlRange(1, $realEstateListings->lastPage());

        // Return the search results view with the real estate listings
        return view('/pages/results',[
            'listings'=>$realEstateListings,
            'paginationUrls'=>$paginationUrls,
        ]);
    }

    
}

       // $filePath = public_path('uploads');
        // if ($request->hasfile('photo')) {
        //     $file = $request->file('photo');
        //     $file_name = time() . $file->getClientOriginalName();
        //     $file->move($filePath, $file_name);
        //     $listing->photo = $file_name;
        //     }