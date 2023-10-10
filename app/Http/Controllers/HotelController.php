<?php

namespace App\Http\Controllers;
 
use Illuminate\Support\Facades\Storage;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {   
        $hotels = Hotel::all();
        return view('admin/hotels/show', compact('hotels'));
       
        // echo" hello all data show";
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('hotels.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {  
        // Validate the form data, including the image
        $validatedData = $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust allowed mime types and max size as needed
        ]);
    
        // Handle file upload
        $imagePath = $request->file('image')->store('images', 'public');
    
        // Create a new data
        Hotel::create([
            'name' => $validatedData['name'],
            'price' => $validatedData['price'],
            'description' => $validatedData['description'],
            'image_path' => $imagePath,
        ]);
        return redirect()->back();
        // return redirect()->route('hotels.index')->with('success', 'Hotel data created successfully');
    }

    // Display the specified resource.
    public function show(Hotel $hotel)
    {
    //   echo "hello from show function ";
        $hotels = Hotel::all();
        
        return view('admin.hotels.show', compact('hotels'));
    }

    // Show the form for editing the specified resource.
    public function edit(Hotel $hotel)
    {
        return view('admin.hotels.edit', compact('hotel'));
        
    }

    public function update(Request $request, Hotel $hotel)
    {
        $hotel->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            // Update other fields as needed
        ]);

        // Handle image update if a new image is provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $hotel->update(['image_path' => $imagePath]);
        }
        $hotels = Hotel::all();
        return view('admin/hotels/show', compact('hotels'));
    }

    // Remove the specified resource from storage.
    public function destroy(Hotel $hotel)
    {  


        $hotel->forceDelete();
        $hotels = Hotel::all();
        return view('admin/hotels/show', compact('hotels'));
       
    }

    public function showHotels()
    {
        $hotels = Hotel::all(); // Fetch all hotels from the database
        return view('hotel', ['hotels' => $hotels]);
         
        // return view('hotels.index', compact('hotels'));
    }

    public function showhotelsbyid($id)
    {
        $hotels = Hotel::find($id); // Find a hotels by its ID
        $name = $hotels->name;
        if (!$hotels) {
            abort(404, 'hotel not found'); // Display a 404 error with a message
        }
        
        return view('show_hotels', ['hotels' => $hotels, 'id'=>$id  , 'name'=>$name]);
    }  

}

