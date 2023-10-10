<?php

namespace App\Models;
 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{   

    protected $fillable = ['country', 'price', 'description', 'image_path'];
}
