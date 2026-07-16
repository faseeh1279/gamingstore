<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){ 
        return view('frontend.news.index'); 
    }

    public function show(){ 
        return view('frontend.news.show'); 
    }
}
