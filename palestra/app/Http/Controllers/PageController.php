<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public static $corsi = 
   [
      "Pilates" => 
      [
         "Name" => "Pilates",
         "Giorni" => "Lunedi, Mercoledì, Venerdì",
         "Orario" =>  "10.30-12.00",
         "Sala" => 3,
         "Insegnante" => "Lorena Marco",
         "Descrizione"=> "Il Pilates è un metodo di allenamento pensato per favorire l'elasticità
         delle articolazioni, la fluidità dei movimenti e l'allungamento dei muscoli. Incoraggia l'uso
         della mente per controllare i muscoli.",
         "Cover" => "http://www.starfitnessroma.it/wp-content/uploads/pilates-19-1200x800.jpg"

      ],
      "Krav Maga" =>
      [
         "Name" => "Krav Maga",
         "Giorni" => "Martedì, Giovedì",
         "Orario" =>  "20-22",
         "Sala" => 1,
         "Insegnante" => "Giovanni Blusi",
         "Descrizione"=> "Il Krav Maga è la quintessenza della tattica per l’autodifesa, il combattimento corpo a corpo e la protezione di terza persona, insegna ad affrontare i reali pericoli della strada.",
         "Cover" => "http://www.starfitnessroma.it/wp-content/uploads/Kraw-12-1200x800-1.jpg"
      ],
      "Hata Yoga" => 
      [
         "Name" => "Hata Yoga",
         "Giorni" => "Lunedì, Martedì, Mercoledì, Giovedì, Venerdì",
         "Orario" =>  "10-12 / 17-19",
         "Sala" => 2,
         "Insegnante" => "Karola Sinne",
         "Descrizione"=> "Lo Yoga entra nella vita fuori dal tappetino senza neanche accorgersene. Il corpo e la mente reagiscono in modo spontaneo e spesso ci accorgiamo del risultato e degli effetti solo dopo molto tempo.",
         "Cover" => "http://www.starfitnessroma.it/wp-content/uploads/Yoga-3-1200x800.jpg"
      ]

   ];



   public function index(){
    return view('home');
   }

   public function corsi(){
    return view('corsi', ['corsi'=>self::$corsi]);
   }

   public function contatti(){
    return view('form');
   }

   public function details($ref){
      //dd($name);
      foreach(self::$corsi['Pilates'] as $corso){
         if($ref == $corso['Name']){
            return view('details', ['corso'=>$corso]);
         }
      }
      foreach(self::$corsi['Krav Maga'] as $corso){
         if($ref == $corso['Name']){
            return view('details', ['corso'=>$corso]);
         }
      }
      foreach(self::$corsi['Hata Yoga'] as $corso){
         if($ref == $corso['Name']){
            return view('details', ['corso'=>$corso]);
         }
      }
      abort(404);
   }
}
