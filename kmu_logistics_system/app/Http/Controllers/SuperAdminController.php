<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function superAdmin()
    {
        // Add your logic for super admin home page
        return view('SuperAdmin/superAdmin');
    }
}
