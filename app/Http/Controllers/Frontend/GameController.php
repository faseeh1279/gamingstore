<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(){ 
        return view('frontend.games.index'); 
    }

    public function show(){ 
        return view('frontend.games.show'); 
    }
}
