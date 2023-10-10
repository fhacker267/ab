<?php

namespace App\Http\Controllers;
 
use Illuminate\Support\Facades\Storage;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {   
        $flights = Flight::all();
        return view('admin/flights/show', compact('flights'));
        // echo "$flights";
        // echo" hello all data show";
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('flights.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        
        // Validate the form data, including the image
        $validatedData = $request->validate([
            'country' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust allowed mime types and max size as needed
        ]);
    
        // Handle file upload
        if($request->hasfile('image')){
          
            $imagePath = $request->file('image')->store('images', 'public');
            // $imagePath = $request->file('image')->storeAs('public/images', $request->file('image')->getClientOriginalName());


        }
    
        // Create a new flight
        Flight::create([
            'country' => $validatedData['country'],
            'price' => $validatedData['price'],
            'description' => $validatedData['description'],
            'image_path' => $imagePath,
        ]);
    
        return redirect()->back();
    }

    // Display the specified resource.
    public function show(Flight $flight)
    {
        $flights = Flight::all();
        
        return view('admin.flights.show', compact('flights'));
    }

    // Show the form for editing the specified resource.
    public function edit(Flight $flight)
    {
        return view('admin.flights.edit', compact('flight'));
    }

    public function update(Request $request, Flight $flight)
    {
        $flight->update([
            'country' => $request->input('country'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            // Update other fields as needed
        ]);

        // Handle image update if a new image is provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $flight->update(['image_path' => $imagePath]);
        }

        $flights = Flight::all();
        return view('admin/flights/show', compact('flights'));
    }

    // Remove the specified resource from storage.
    public function destroy(Flight $flight)
    {  


        $flight->forceDelete();

        $flights = Flight::all();
        return view('admin/flights/show', compact('flights'));
    }



    public function showflights()
    {
        $flights = Flight::all(); // Fetch all data from the database
        return view('flights', ['flights' => $flights]);
         
    }
    public function showflightsbyid($id)
    {
        $flights = Flight::find($id); // Find a flight by its ID
        $country = $flights->country;
        if (!$flights) {
            abort(404, 'Flight not found'); // Display a 404 error with a message
        }
        
        return view('show_flights', ['flights' => $flights ,  'id'=>$id  , 'country'=>$country]);
    }
}