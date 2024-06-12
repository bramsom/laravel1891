<?php

namespace App\Http\Controllers;
use App\Models\Copy;
use App\Models\User;
use Illuminate\Http\Request;

class CopyUserController extends Controller
{
    //
    public function asociar(){

        $copies = copy::all();
        $users = user::all();
       
        return view('copy_user.asociar',compact('copies','users'));

    }

    public function store(Request $request){

        $copy = Copy::find($request->copy_id);

        $copy->user()->attach($request->user_id);

        return " SE ACREADO UNA NUEVA ASOCIOACION";
    }

}
