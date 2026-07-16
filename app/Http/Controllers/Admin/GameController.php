<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(){ 
        return view('admin.games.index'); 
    }

    public function create(){ 
        return view('admin.games.create'); 
    }

    public function edit(){ 
        return view('admin.games.edit'); 
    }

    public function store(){ 
        return redirect()->route('admin.games.index')->with('success', 'Game created successfully'); 
    }

    public function view(){ 
        return view('admin.games.view'); 
    }
}
