<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverOfficerController extends Controller
{
    public function index()
    {
        // Add your logic for driver officer home page
        return view('DriverOfficer.driverofficer');
    }
}
