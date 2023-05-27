<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('books.home', ['books' => $books]);
    }

    public function create(){
        return view('books.form');

    }
 
    public function store(BookRequest $request){
      // $request->validate([
      //   "title" => 'required|string',
      //   "author" => 'required|string',
      //   "pages" => 'required|numeric',
      //   "year" => 'required|numeric'
      // ]);

      Book::create([
        'title' => $request->title,
        'author' => $request->author,
        'pages' => $request->pages,
        'year' => $request->year
      ]);
      
      return redirect()->route('books.home')->with('success', 'Creazione avvenuta con successo!');

    }

    public function show(Book $book){

    return view('books.show', compact('book'));
    }



    
}
