<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('home');
        
    } 
    public function about_us()
    {
        return view('aboutus');
    }

}
