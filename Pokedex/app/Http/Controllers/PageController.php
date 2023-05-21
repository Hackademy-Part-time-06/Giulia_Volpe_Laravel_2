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
        $gen1 = Http::get('https://pokeapi.co/api/v2/pokemon')->json();
        dd($gen1);
        return view('show1', ['pokemon'=> $gen1]);
    }
}
