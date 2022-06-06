<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sosialmedia;

class sosmedcontroller extends Controller
{
    function index()
    {
        $medias = sosialmedia::all();
        return view('about', compact('medias'));
    }
}