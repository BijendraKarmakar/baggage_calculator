<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CityLocation;
use App\Models\Price;
use App\Models\ZoneSelection;
use DB;

class RateController extends Controller
{
    public function index(){

        $cities = CityLocation::select('city', 'location')->get()->toArray();

        return view('index', [
            'cities' => $cities
        ]);
    }

    public function show(Request $request){

        $this->validate($request, [
            'current_city' => 'required',
            'destination' => 'required',
            'quantity' => 'required'
        ]);

        $zone_one = $request->current_city;
        $zone_two = $request->destination;
        $quantity = $request->quantity;

        $zone_value = DB::table('zone_selection')
                            ->select('zone_value')
                            ->where(['zone_one' => $zone_one, 'zone_two' => $zone_two])
                            ->first();
        
        $rate = DB::table('price')
                        ->select('price')
                        ->where(['zone_value' => $zone_value->zone_value, 'weight_kg' => $quantity])
                        ->first();
        
        return redirect('/')->with('success', 'Your baggage rate will be ' . $rate->price);
    }
}
