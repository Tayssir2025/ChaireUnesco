<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutLPController extends Controller
{
    public function index()
    {
        return view('about');
    }
}
