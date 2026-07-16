<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index(){ 
        return view('admin.publishers.index'); 
    }

    public function create(){ 
        return view('admin.publishers.create'); 
    }

    public function view(){ 
        return view('admin.publishers.view'); 
    }
}
