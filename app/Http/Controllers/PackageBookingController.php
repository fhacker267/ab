<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PackageBooking;

class PackageBookingController extends Controller
{
    public function submitContact(Request $request)
    {

        

        // Create a new PackageBooking instance and populate it with the form data
        $packageBooking = new PackageBooking();
        $packageBooking->contact_name = $request->contactName;
        $packageBooking->contact_email = $request->contactEmail;
        $packageBooking->contact_phone_number = $request->contactPhoneNumber;
        $packageBooking->contact_address = $request->contactAddress;
        $packageBooking->passenger_count = $request->passengerCount;
        $packageBooking->transport_option = $request->transportOption;
        $packageBooking->transport_passengers = $request->transportPassengers;
        $packageBooking->total_price = $request->totalPrice;
        $packageBooking->package_id = $request->packageId;

        // Save the package booking data to the database
        
        

        $packageBooking->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Contact information and package details submitted successfully.');
    }

    public function index()
    {
        // Retrieve all package bookings from the database
        $packageBookings = PackageBooking::all();

        // Load a view to display the list of package bookings
        return view('admin.packagebookings.index', compact('packageBookings'));
    } 

     
    public function destroy(PackageBooking $packageBooking)
    {
        $packageBooking->forceDelete();
        $packageBookings = PackageBooking::all();
        return view('admin.packagebookings.index', compact('packageBookings'));
    }
    
    
  

}
