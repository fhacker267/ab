<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactForm;
use App\Models\WhatsAppNumber;
use App\Models\PackageBooking;
use App\Models\VisaBooking;
use App\Models\FlightBooking;
use App\Models\HotelBooking;

class DashboardController extends Controller
{
    public function index()
    {    $packageBookings = PackageBooking::all(); 
       $packages= count($packageBookings);

        $flightBookings = FlightBooking::all();
        $Flight= count($flightBookings);

        $hotelBookings = HotelBooking::all();
        $hotel= count($hotelBookings);

        $visaBookings = VisaBooking::all();
        $Visa= count($visaBookings);

        return view('admin.index',compact('packages','Flight', 'hotel', 'Visa'));
    }
    public function flights()
    {
        return view('admin.flights.index');
    }
    public function hotels()
    {
        return view('admin.hotels.index');
    }
    public function visas()
    {
        return view('admin.visas.index');
    }
    public function packages()
    {
        return view('admin.packages.index');
    }
    public function contact()
    {
    
        $contactForms = ContactForm::all();
        return view('admin.contact.index' ,compact('contactForms'));
    }
    public function destroy(ContactForm $contactForm)
    {  
        $contactForm->forceDelete();
        $contactForms = ContactForm::all();
        return view('admin.contact.index' ,compact('contactForms'));
       
    }
    public function whatsappnumbers()
    {
        return view('admin.whatsappnumbers.index');
    }
    public function packagebookings()
    {
        return view('admin.packagebookings.index');
    } 
    public function flightbookings()
    {
        return view('admin.flightbookings.index');
    } 
    public function hotelbookings()
    {
        return view('admin.hotelbookings.index');
    } 
    public function destroy1(PackageBooking $packageBooking)
    {  
        $packageBooking->forceDelete();
        $packageBookings = PackageBooking::all();
        return view('admin.packagebookings.index', compact('packageBookings'));
       
    } 
    public function destroyvisabooking(VisaBooking $visaBooking)
    {  
        $visaBooking->forceDelete();
        $visaBookings = VisaBooking::all();
        return view('admin.visabookings.index', compact('visaBookings'));
       
    } 
    public function destroyflightbooking(FlightBooking $flightBooking)
    {   
        $flightBooking->forceDelete();
        $flightBookings = FlightBooking::all();
        return view('admin.flightbookings.index', compact('flightbookings'));
       
    }  

}
