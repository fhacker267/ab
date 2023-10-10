<?php

namespace App\Http\Controllers;
 
use Illuminate\Support\Facades\Storage;
use App\Models\Visa;
use Illuminate\Http\Request;

class VisaController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {   
        $visas = Visa::all();
        return view('admin/visas/show', compact('visas'));
       
        // echo" hello all data show";
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('visas.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {  
        // Validate the form data, including the image
        $validatedData = $request->validate([
            'country' => 'required|string',
            'price' => 'required|numeric',
            'date' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust allowed mime types and max size as needed
        ]);
    
        // Handle file upload
        $imagePath = $request->file('image')->store('images', 'public');
    
        // Create a new data
        Visa::create([
            'country' => $validatedData['country'],
            'price' => $validatedData['price'],
            'date' => $validatedData['date'],
            'image_path' => $imagePath,
        ]);
        return redirect()->back();
        // return redirect()->route('visas.index')->with('success', 'visa data created successfully');
    }

    // Display the specified resource.
    public function show(Visa $visa)
    {
    //   echo "hello from show function ";
        $visas = Visa::all();
        
        return view('admin.visas.show', compact('visas'));
    }

    // Show the form for editing the specified resource.
    public function edit(Visa $visa)
    {
        return view('admin/visas/edit', compact('visa'));
        
    }

    public function update(Request $request, Visa $visa)
    {
        $visa->update([
            'country' => $request->input('country'),
            'price' => $request->input('price'),
            'date' => $request->input('date'),
            // Update other fields as needed
        ]);

        // Handle image update if a new image is provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $visa->update(['image_path' => $imagePath]);
        }
        $visas = Visa::all();
        return view('admin/visas/show', compact('visas'));
    }

    // Remove the specified resource from storage.
    public function destroy(Visa $visa)
    {  


        $visa->forceDelete();
        $visas = Visa::all();
        return view('admin/visas/show', compact('visas'));
       
    }

    public function showvisas()
    {
        $visas = Visa::all(); // Fetch all visas from the database
        return view('visa', ['visas' => $visas]);
         
        // return view('visas.index', compact('visas'));
    }
    public function showvisasbyid($id)
    {
        $visas = Visa::find($id); // Find a visa by its ID
        $country = $visas->country;
        if (!$visas) {
            abort(404, 'Visa not found'); // Display a 404 error with a message
        }
        
        return view('show_visas', ['visas' => $visas , 'id'=>$id  , 'country'=>$country]); 
    } 



}

