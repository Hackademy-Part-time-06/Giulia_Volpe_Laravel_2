<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function index(){
        $poke = Http::get('https://pokeapi.co/api/v2/pokemon?limit=151')->json();

        return view('gen1.home', ['pokemon'=> $poke['results']]);
    }

    public function showGen1($slug){
        $pkm = Http::get('https://pokeapi.co/api/v2/pokemon/'.$slug);
    
        return view('gen1.show1', ['pokemon' => $pkm]);
        
                
    }
   
}
