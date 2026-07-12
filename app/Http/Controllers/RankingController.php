<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function __construct()
    {
        throw new \Exception('Not implemented');
    }


    public function index(){ 
        return view('ranking.index'); 
    }
}
