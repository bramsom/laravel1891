<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function create(){

        return view('libros.book');

    }

    public function store(Request $request){
        $book = new book();
        $book->title=$request->title;
        $achiviement->ISBN=$request->ISBN;
        $achiviement->editorial=$request->editorial;
        $achiviement->pages=$request->pages;
        $achiviement->save();
        return $request;
     }

    public function index(){

        $books = books::orderBy('id', 'desc')->get();
        return view('libros/listar', compact('books'));
    }
     public Function show ($id){

        $book=book::find($id);
        $book;
        return view('libros/show', compact('book'));

    }
    public function destroy($id) {
        $book = book::findOrFail($id);
        $book->delete();
        return redirect()->route('book.index');
    }
    public function edit(book $book)
    {
        return view('libros.editar', compact('book'));
    }

    public function update(Request $request, book $book)
    {
        $book->title = $request->title;
        $book->ISBN = $request->ISBN;
        $book->editorial = $request->editorial;
        $book->page = $request->page;
        $book->save();

        return redirect()->route('book.index');
    }
}
