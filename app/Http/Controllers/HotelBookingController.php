<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelBooking;

class HotelBookingController extends Controller
{
    public function submitContact(Request $request)
    {

        
 
        // Create a new HotelBooking instance and populate it with the form data
       $hotelBooking = new HotelBooking();
       $hotelBooking->contact_name = $request->contactName;
       $hotelBooking->contact_email = $request->contactEmail;
       $hotelBooking->contact_phone_number = $request->contactPhoneNumber;
       $hotelBooking->contact_address = $request->contactAddress;
       $hotelBooking->passenger_count = $request->passengerCount;
       $hotelBooking->name = $request->name;
       $hotelBooking->total_price = $request->totalPrice;
       $hotelBooking->hotel_id = $request->hotelId;

        // Save the hotel  booking data to the database
        
        

       $hotelBooking->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Contact information and hotel details submitted successfully.');
    }

    public function index()
    {
        // Retrieve all hotel bookings from the database
       $hotelBookings = HotelBooking::all();

        // Load a view to display the list of hotel bookings
        return view('admin.hotelBookings.index', compact('hotelBookings'));
    } 

     
    public function destroy(HotelBooking $hotelBooking)
    {
       $hotelBooking->forceDelete();
       return redirect()->back();
    }
    
    
  

}
