<?php

namespace App\Http\Controllers;

use App\Models\sectionone;
use Illuminate\Http\Request;

class seconecontroller extends Controller
{
    function index()
    {
        $secone = sectionone::all();
        return view('welcome', compact('secone'));
    }
}
