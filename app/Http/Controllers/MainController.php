<?php

namespace App\Http\Controllers;

use App\Models\Good;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(Request $request)
    {
        $name = $request->input('name');
        $cards = Good::where('name', 'like', '%' . $name . '%')->get();

        return view('home', compact('cards'));
    }
}
