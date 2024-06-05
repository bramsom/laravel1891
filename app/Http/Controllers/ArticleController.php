<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    //
    public function food(){

        return view('markets.articlee');
        }
    
    public function shop (Request $request){
        $Article=new Article();
        $Article-> name=$request->name;
        $Article-> price=$request->price;
        $Article-> description=$request->description;
        $Article-> cantidad=$request->cantidad;
        $Article-> date_exp=$request->date_exp;
        $Article->save();
        return $Article;
    }
        
    public Function list(){
        $markets = Article::orderBy('id','desc')->get();
        return view('markets/list', compact('markets'));
        }
    
        public function show($id){
            $markets=Article::find($id);  
            return $markets;
        }
    
        public function destroy(Article $markets){
          $markets->delete();
          return redirect()->route('markets.list');
        }
}
