<?php

namespace App\Http\Controllers;

use App\Models\Good;

class MainController extends Controller
{
    public function home()
    {
        $cards = new Good();
        return view('home', ['cards'=>Good::all()]); 
        $cardinfo1 = ['img_src' => asset('images/Sororitas.png'), 'price' => 13650];
        // $cardinfo2 = ['img_src' => asset('images/dos.png'), 'price' => 550];
        // $cardinfo3 = ['img_src' => asset('images/GloomhavenМрачнаяГавань.png'), 'price' => 11990];
        // $cardinfo4 = ['img_src' => asset('images/SPACEMARINESQUAD.jpg'), 'price' => 550];
        // $cardinfo5 = ['img_src' => asset('images/ДревнийУжас.jpg'), 'price' => 2000];
        // $cardinfo6 = ['img_src' => asset('images/OrksKilldakkaWarband.png'), 'price' => 550];
        return view('home', ["cards" => [$cardinfo1, $cardinfo2, $cardinfo3, $cardinfo4, $cardinfo5, $cardinfo6]]);
    }
}