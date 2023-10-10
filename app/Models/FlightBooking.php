<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightBooking extends Model
{
    protected $fillable = [
        'flight_id', 'passenger_count', 'country',  
         'total_price', 'contact_name', 'contact_email',
        'contact_phone_number', 'contact_address',
    ];

    public function flight()
    {
        return $this->belongsTo(Flight::class, 'flight_id');
    }
}
