<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function index(){
        return view('gen1.home');
    }

    public function showGen1(){

        $base = 'https://pokeapi.co/api/v2/pokemon/';
        $pkms = [];       
        for ($id = 1; $id < 15; $id++) {
            $response = Http::get($base.$id.'/');
            $pokemon = $response->json();
            $pkms[] = $pokemon;
        }        
        return view('gen1.show1', ['pokemonList' => $pkms]);
                     
    }
}
