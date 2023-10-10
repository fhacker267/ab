<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisaBooking extends Model
{
    protected $fillable = [
        'visa_id', 'passenger_count', 'country',  
         'total_price', 'contact_name', 'contact_email',
        'contact_phone_number', 'contact_address',
    ];

    public function visa()
    {
        return $this->belongsTo(Visa::class, 'visa_id');
    }
}
 


