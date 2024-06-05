<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    //
    public function index(){
        $product= product::orderBy('id','desc')->get();
        return view('product.listar',compact('product'));
    }


    public function create(){


        return view('product.delete');

    }
    public function Store(Request $request){
       
        $producto = new Product();

        $producto->name=$request->name;
        $producto->price=$request->price;
        $producto->description=$request->description;
        $producto->amount=$request->amount;
        $producto->date=$request->date;
        $producto->save();

        return $producto;
     }
        
    }

