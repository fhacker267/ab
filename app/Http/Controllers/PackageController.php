<?php

namespace App\Http\Controllers;
 
use Illuminate\Support\Facades\Storage;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {   
        $packages = Package::all();
        return view('admin/packages/show', compact('packages'));
       
        // echo" hello all data show";
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('packages.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {  
        // Validate the form data, including the image
        $validatedData = $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'transportprice' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust allowed mime types and max size as needed
        ]);
    
        // Handle file upload
        $imagePath = $request->file('image')->store('images', 'public');
    
        // Create a new data
        Package::create([
            'name' => $validatedData['name'],
            'price' => $validatedData['price'],
            'transportprice'=>$validatedData['transportprice'],
            'description' => $validatedData['description'],
            'image_path' => $imagePath,
        ]);
        return redirect()->back();
       
    }

    // Display the specified resource.
    public function show(Package $package)
    {
    //   echo "hello from show function ";
        $packages = Package::all();
        
        return view('admin.packages.show', compact('packages'));
    }

    // Show the form for editing the specified resource.
    public function edit(Package $package)
    {
        return view('admin.packages.edit', compact('package'));
        
    }

    public function update(Request $request, Package $package)
    {
        $package->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'transportprice' => $request->input('transportprice'),
            'description' => $request->input('description'),
            // Update other fields as needed
        ]);

        // Handle image update if a new image is provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $package->update(['image_path' => $imagePath]);
        }
        $packages = Package::all();
        return view('admin/packages/show', compact('packages'));
    }

    // Remove the specified resource from storage.
    public function destroy(Package $package)
    {  


        $package->forceDelete();
        $packages = Package::all();
        return view('admin/packages/show', compact('packages'));
       
    }
 
    public function showpackages()

    {

        $packages = Package::all(); // Fetch all date from the database

        return view('packages', ['packages' => $packages]);

    }
    public function indexpackages()

    {

        $packages = Package::all(); // Fetch all date from the database

        return view('/index', ['packages' => $packages]);

    }

    public function showpackagesbyid($id)
    {
        $packages = Package::find($id); // Find a packages by its ID

        if (!$packages) {
            abort(404, 'package not found'); // Display a 404 error with a message
        }
        
        return view('show_packages', ['packages' => $packages, 'id'=>$id]);
    } 

}

