<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverOfficerController extends Controller
{
    public function driverofficer()
    {
        // Add your logic for super admin home page
        return view('DriverOfficer/driverofficer');
    }
}