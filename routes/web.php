<?php
use App\Http\Controllers\PackageBookingController;
use App\Http\Controllers\VisaBookingController;
use App\Http\Controllers\FlightBookingController;
use App\Http\Controllers\HotelBookingController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\VisaController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\IndexhomeController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\HotelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\WhatsAppNumberController;
/*
|---------------------------------------------------------show-----------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::post('/submit-package-booking', [PackageBookingController::class, 'submitContact'])->name('submit.package.booking');

Route::post('/submit-visa-booking', [VisaBookingController::class, 'submitContact'])->name('submit.visa.booking');

Route::post('/submit-flight-booking', [FlightBookingController::class, 'submitContact'])->name('submit.flight.booking');


Route::post('/submit-hotel-booking', [HotelBookingController::class, 'submitContact'])->name('submit.hotel.booking');



Route::get('/', function () {
    return view('welcome');
});
Route::get('/flights', function () {
    return view('flights');
});

Route::group(['prefix'=>'admin','as'=>'admin.'],function(){

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('/register', [AuthController::class, 'registration'])->name('register');
Route::post('/post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::group(['middleware'=>['web','auth']],function(){
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::get('/flights',[DashboardController::class,'flights'])->name('flights');
Route::get('/hotels',[DashboardController::class,'hotels'])->name('hotels');
Route::get('/visas',[DashboardController::class,'visas'])->name('visas');
Route::get('/packages',[DashboardController::class,'packages'])->name('packages');
Route::get('/contact',[DashboardController::class,'contact'])->name('contact');
Route::delete('/contact/{contactForm}', [DashboardController::class, 'destroy'])->name('contact.destroy');

Route::delete('/packagebookings/{packageBooking}', [DashboardController::class, 'destroy1'])->name('packagebookings.destroy1');

Route::delete('/visabookings/{visaBooking}', [DashboardController::class, 'destroyvisabooking'])->name('visabookings.destroyvisabooking');
 

Route::get('/packagebookings',[DashboardController::class,'packagebookings']); 
Route::get('/flightbookings',[DashboardController::class,'flightbookings']);
Route::get('/hotelbookings',[DashboardController::class,'hotelookings']); 
Route::get('/visabookings',[DashboardController::class,'visabookings']); 
Route::get('/whatsappnumbers',[DashboardController::class,'whatsappnumbers']); 
});
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 


Route::get('/admin/whatsappnumbers', [WhatsAppNumberController::class, 'index'])->name('admin.whatsappnumbers.index');
Route::post('/admin/whatsappnumbers', [WhatsAppNumberController::class, 'store'])->name('admin.whatsappnumbers.store');
Route::get('/admin/whatsappnumbers/{id}', [WhatsAppNumberController::class, 'show'])->name('admin.whatsappnumbers.show');
Route::get('/admin/whatsappnumbers/{id}/edit', [WhatsAppNumberController::class, 'edit'])->name('admin.whatsappnumbers.edit');
Route::put('/admin/whatsappnumbers/{id}', [WhatsAppNumberController::class, 'update'])->name('admin.whatsappnumbers.update');






 
    // all flights routes of admin
 

Route::prefix('admin')->group(function () {
    Route::prefix('flights')->group(function () {
        Route::get('/{flight}/edit', [FlightController::class, 'edit'])->name('admin.flights.edit');
        Route::get('/show', [FlightController::class, 'show'])->name('admin.flights.show');
        Route::post('/', [FlightController::class, 'store'])->name('admin.flights.store');
        Route::put('/{flight}', [FlightController::class, 'update'])->name('admin.flights.update');
        Route::delete('/{flight}', [FlightController::class, 'destroy'])->name('admin.flights.destroy');
    });
}); 


 
 
// all hotels routes of admin

Route::prefix('admin')->group(function () {
    Route::prefix('hotels')->group(function () {
        Route::post('/', [HotelController::class, 'store'])->name('hotels.store');
        Route::get('/show', [HotelController::class, 'show'])->name('admin.hotels.show');
        Route::get('/{hotel}/edit', [HotelController::class, 'edit'])->name('admin.hotels.edit');
        Route::put('/{hotel}', [HotelController::class, 'update'])->name('admin.hotels.update');
        Route::delete('/{hotel}', [HotelController::class, 'destroy'])->name('admin.hotels.destroy');
        // You can uncomment and add more routes here as needed
    });
});





//all visas routes of admin
Route::prefix('admin')->group(function () {
    Route::prefix('visas')->group(function () {
        Route::post('/', [VisaController::class, 'store'])->name('visas.store');
        Route::get('/show', [VisaController::class, 'show'])->name('admin.visas.show');
        Route::delete('/{visa}', [VisaController::class, 'destroy'])->name('admin.visas.destroy');
        Route::get('/{visa}/edit', [VisaController::class, 'edit'])->name('admin.visas.edit');
        Route::put('/{visa}', [VisaController::class, 'update'])->name('admin.visas.update');
        // You can uncomment and add more routes here as needed
    });
});





//all packages routes of admin
Route::prefix('admin')->group(function () {
    Route::prefix('packages')->group(function () {
        Route::post('/', [PackageController::class, 'store'])->name('packages.store');
        Route::get('/show', [PackageController::class, 'show'])->name('admin.packages.show');
        Route::delete('/{package}', [PackageController::class, 'destroy'])->name('admin.packages.destroy');
        Route::get('/{package}/edit', [PackageController::class, 'edit'])->name('admin.packages.edit');
        Route::put('/{package}', [PackageController::class, 'update'])->name('admin.packages.update');
        // You can uncomment and add more routes here as needed
    });
});

 







//here all routes of front end starts 
Route::get('/', function () {
    return view('index');
});

// Route::get('/', function () {
//     return view('/index');
// // })->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/hotel', function () {
    return view('hotel');
});

 
 
// Route::get('/hotels', [HotelController::class, 'showHotels']);
Route::get('/visas', [VisaController::class, 'showvisas']);
Route::get('/packages', [PackageController::class, 'showpackages']);
Route::get('/', [PackageController::class, 'indexpackages']);
// Route::get('/flights', [FlightController::class, 'showflights']);
// Route::get('/flight{id}', [FlightController::class, 'showflightsbyid'])->name('show_flights');
Route::get('/visa{id}', [VisaController::class, 'showvisasbyid'])->name('show_visas');
Route::get('/package{id}', [PackageController::class, 'showpackagesbyid'])->name('show_packages');
// Route::get('/hotel{id}', [HotelController::class, 'showhotelsbyid'])->name('show_hotels');






Route::get('/contact', [ContactFormController::class, 'showForm'])->name('contact');
Route::post('/contact', [ContactFormController::class, 'submitForm'])->name('contact.submit');
// Route::get('/contact', [ContactFormController::class, 'showAllData'])->name('contact');


Route::get('/admin/packagebookings', [PackageBookingController::class, 'index'])->name('packagebookings.index');
 


Route::get('/admin/visabookings', [VisaBookingController::class, 'index'])->name('visabookings.index');
 



Route::get('/admin/flightbookings', [FlightBookingController::class, 'index'])->name('flightbookings.index');
Route::delete('admin/flightbookings/{flightBooking}', [FlightBookingController::class, 'destroy'])->name('flightBookings.destroy');




Route::get('/admin/hotelbookings', [HotelBookingController::class, 'index'])->name('hotelbookings.index');
Route::delete('admin/hotelbookings/{hotelBooking}', [HotelBookingController::class, 'destroy'])->name('hotelBookings.destroy');