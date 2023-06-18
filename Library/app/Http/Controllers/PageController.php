<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{

  public function __construct(){
    $this->middleware('auth')->except('index', 'show', 'search');
  }
    public function index(){

      if(Auth::user()){
        $books = Book::where('user_id', Auth::user()->id)->get();
      }
      else{
        $books = Book::all();
      }
        
        return view('books.home', ['books' => $books]);
    }

    public function create(){
      $authors = Author::all();
      $categories = Category::all();
      
        return view('books.create', compact('authors', 'categories'));

    }
 
    public function store(BookRequest $request){
      // $request->validate([
      //   "title" => 'required|string',
      //   "author" => 'required|string',
      //   "pages" => 'required|numeric',
      //   "year" => 'required|numeric'
      // ]);
      $file_path = "";
      if($request->file('image') && $request->file('image')->isValid()){
        $file_name = $request->file('image')->getClientOriginalName();
        $file_path = $request->file('image')->storeAs('public/image', $file_name);
      }

      $data = Book::create([
        'title' => $request->title,
        'author_id' => $request->author_id,
        'pages' => $request->pages,
        'year' => $request->year,
        'image' => $file_path,
        'plot' => $request->plot,
        'user_id' => Auth::user()->id
      ]);
      
      $data->categories()->attach($request->categories);
      return redirect()->route('books.home')->with('success', 'Creazione avvenuta con successo!');

    }

    public function show(Book $book){ 

    return view('books.show', compact('book'));
    }

    public function edit(Book $book){
      $authors = Author::all();
      $categories = Category::all();
      return view('books.edit', compact('book', 'authors', 'categories'));
    }

    public function update(BookRequest $request, Book $book){
      //dd($request->all());
      $file_path = $book->image;

      if($request->file('image') && $request->file('image')->isValid()){
        $file_name = $request->file('image')->getClientOriginalName();
        $file_path = $request->file('image')->storeAs('public/image', $file_name);
      }
  
      $book->update([
        'title' => $request->title,
        'author' => $request->author,
        'pages' => $request->pages,
        'year' => $request->year,
        'image' => $file_path,
        'plot' => $request->plot
      ]);

      $book->categories()->detach(); // stacco i valori per aggiornare la checkbox
      $book->categories()->attach($request->categories); // faccio in modo che i valori nuovi vengano valorizzati

     // $book->categories()->sync($request->categories); //Metodo 2 in 1

      return redirect()->route('books.home')->with('success', 'Modifica avvenuta con successo!');

    }

    public function destroy(Book $book){

      $book->delete();

      return redirect()->route('books.home')->with('success', 'Cancellazione avvenuta con successo!');
    }


    public function search(Request $request){
        $filter_books = Book::where('title', 'like', '%' . $request->search . '%')->get();

        return view('books.home', ['books' => $filter_books]);
    }
    
}
