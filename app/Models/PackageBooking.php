<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageBooking extends Model
{
    protected $fillable = [
        'package_id', 'passenger_count', 'transport_option', 'transport_passengers',
        'package_price', 'total_price', 'contact_name', 'contact_email',
        'contact_phone_number', 'contact_address',
    ];

    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }
    public function getFormattedTransportOptionAttribute()
{
    return $this->attributes['transport_option'] == 1 ? 'Yes' : 'No';
}
}
 


