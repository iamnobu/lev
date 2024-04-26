<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;

class PlaceController extends Controller
{
    public function index (Request  $request)
    {
        $query = place::query();
        
        if ($request->has('prefecture')) 
        {
            $query->where('prefecture', $request->input('prefecture'));
        }
        
        $places = $query->paginate(10);
        
        return view('places.index', compact('places'));
    }
}

