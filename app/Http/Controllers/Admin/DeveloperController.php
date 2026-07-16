<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    public function index(){ 
        return view('admin.developers.index'); 
    }

    public function create(){ 
        return view('admin.developers.create'); 
    }

    public function view(){ 
        return view('admin.developers.view'); 
    }
}
