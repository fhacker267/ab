<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelBooking extends Model
{
    protected $fillable = [
        'hotel_id', 'passenger_count', 'name',  
         'total_price', 'contact_name', 'contact_email',
        'contact_phone_number', 'contact_address',
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }
}