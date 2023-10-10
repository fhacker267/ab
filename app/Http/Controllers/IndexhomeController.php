<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexhomeController extends Controller
{
    public function indexpackages()

    {

        $packages = Package::all(); // Fetch all date from the database

        return view('/index', ['packages' => $packages]);



        

    }
}
