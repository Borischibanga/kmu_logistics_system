<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student()
    {
        // Add your logic for super admin home page
        return view('Students/student');
    }
}
