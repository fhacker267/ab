<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisaBooking;

class VisaBookingController extends Controller
{
    public function submitContact(Request $request)
    {

        

        // Create a new VisaBooking instance and populate it with the form data
       $visaBooking = new VisaBooking();
       $visaBooking->contact_name = $request->contactName;
       $visaBooking->contact_email = $request->contactEmail;
       $visaBooking->contact_phone_number = $request->contactPhoneNumber;
       $visaBooking->contact_address = $request->contactAddress;
       $visaBooking->passenger_count = $request->passengerCount;
       $visaBooking->country = $request->country;
       $visaBooking->total_price = $request->totalPrice;
       $visaBooking->visa_id = $request->visaId;

        // Save the visa  booking data to the database
        
        

       $visaBooking->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Contact information and visa details submitted successfully.');
    }

    public function index()
    {
        // Retrieve all visa bookings from the database
       $visaBookings = VisaBooking::all();

        // Load a view to display the list of visa bookings
        return view('admin.visabookings.index', compact('visaBookings'));
    } 

     
    public function destroy(VisaBooking $visaBooking)
    {
       $visaBooking->forceDelete();
       $visaBookings = VisaBooking::all();
        return view('admin.visabookings.index', compact('visaBookings'));
    }
    
    
  

}
