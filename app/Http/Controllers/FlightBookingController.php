<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FlightBooking;

class FlightBookingController extends Controller
{
    public function submitContact(Request $request)
    {
 
        

        // Create a new flightBooking instance and populate it with the form data
       $flightBooking = new FlightBooking();
       $flightBooking->contact_name = $request->contactName;
       $flightBooking->contact_email = $request->contactEmail;
       $flightBooking->contact_phone_number = $request->contactPhoneNumber;
       $flightBooking->contact_address = $request->contactAddress;
       $flightBooking->passenger_count = $request->passengerCount;

       $flightBooking->country = $request->country;
       $flightBooking->total_price = $request->totalPrice;
       $flightBooking->flight_id = $request->flightId;

        // Save the visa  booking data to the database
        
        

       $flightBooking->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Contact information and flight details submitted successfully.');
    }

    public function index()
    {
        // Retrieve all flight bookings from the database
       $flightBookings = FlightBooking::all();

        // Load a view to display the list of flight bookings
        return view('admin.flightbookings.index', compact('flightBookings'));
    } 

     
    public function destroy(FlightBooking $flightBooking)
    {
         
       $flightBooking->forceDelete();
       
       return redirect()->back();
    }
    
    
  

}
