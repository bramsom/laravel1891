<?php

namespace App\Http\Controllers;
use app\Models\Truck;
use app\Models\Trucker;
use Illuminate\Http\Request;

class TruckController extends Controller
{
    //
//     public function asociar(){

//         $trucks = Truck::all();
//         $truckers = Trucker::all();
       
//         return view('truck_trucker.asociar',compact('trucks','truckers'));

//     }

//     public function store(Request $request){

//         $truck = Truck::find($request->truck_id);

//         $truck->trucker()->attach($request->trucker_id);

//         return " SE ACREADO UNA NUEVA ASOCIOACION";
//     }

public function prueba(){

    return 'hola desde prueba';
}
}
