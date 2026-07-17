<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){ 
        return view('admin.categories.index'); 
    }

    public function create(){ 
        return view('admin.categories.create'); 
    }

    public function view(){ 
        $category = Category::all(); 
        return view('admin.categories.view', compact('category')); 
    }
}
