<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index(){
    return view('home');
   }

//    public function corsi(){
//     return view();
//    }

//    public function contatti(){
//     return view();
//    }


}
