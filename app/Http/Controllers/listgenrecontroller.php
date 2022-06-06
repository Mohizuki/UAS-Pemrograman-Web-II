<?php

namespace App\Http\Controllers;

use App\Models\listgenre;
use Illuminate\Http\Request;

class listgenrecontroller extends Controller
{
    function index()
    {
        $listgenre = listgenre::all();
        return view('genre', compact('listgenre'));
    }

    
}
