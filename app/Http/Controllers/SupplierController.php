<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function formularioproveedor(){


        return view('frm_proveedor');

    }
    public function suplierStore(Request $request){
       
        $proveedor = new Supplier();

        $proveedor->name=$request->name;
        $proveedor->date=$request->date;
        $proveedor->send=$request->send;
        $proveedor->save();
        
        return $proveedor;
     }
        
}


