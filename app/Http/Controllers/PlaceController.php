<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;
use Auth;
use App\Models\Prefecture;

class PlaceController extends Controller
{
    public function index (Request  $request, Place $place)
    {
        $query = Place::query();
        
        if ($request->has('prefectures')) 
        {
            $query->where('prefecture_id', $request->input('prefectures'));
            $places = $query->paginate(10);
        }
        else {
            $places = $place->paginate(10);
        }
        return view('places.index', compact('places'));
        
        $places=$this->place->findAllPlaces();
        
        return view('places.index', compact('places'));
    }
    
    public function show($id)
    {
        $place = Place::findOrFail($id);
            return view('places.show', compact('place'));
    }
    
    public function create(Prefecture $prefecture)
    {
        return view('places.create')->with(['prefectures'=>$prefecture->get()]);
    }
    
    public function store(Request $request, Place $place)
    {
        // $validatedData = $request->valiadate([
        //     'name' => 'required',
        //     'access' => 'required',
        //     'price' => 'required',
        //     'opening_hour' =>'required',
        //     'discription' => 'required',
        // ]);
        
        // $place = new Place();
        $input=$request['place'];
        $input['user_id']=Auth::id();
        $place->fill($input)->save();
        // $plae->fill($valiatedData)->save();
        // return redirect('/places/' . $place->id);
        return redirect()->route('places.index');
    }
}