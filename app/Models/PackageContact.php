<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageContact extends Model
{
    protected $fillable = ['name', 'email', 'phone_number', 'address'];

    // Define a relationship to the PackageBooking model
    public function packageBooking()
    {
        return $this->belongsTo(PackageBooking::class);
    }
}