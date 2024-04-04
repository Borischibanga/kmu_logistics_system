<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('dashboard');
    }
    public function adminHome(){
        return view('adminHome');
    }
    public function studentHome(){
        return view('studentHome');
    }
    public function driverHome(){
        return view('drivertHome');
    }
    
}
