<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Custom;
class CustomController extends Controller
{
    //
    public function formularioCliente(){


        return view('frm_cliente');

    }
    public function customStore(Request $request){
       
        $custom = new Custom();

        $custom->name=$request->name;
        $custom->last_name=$request->last_name;
        $custom->buys=$request->buys;
        $custom->save();
        
        return $custom;
     }
        
}
