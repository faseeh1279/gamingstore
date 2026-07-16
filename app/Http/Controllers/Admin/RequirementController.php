<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequirementController extends Controller
{
    public function index(){ 
        return view('admin.requirements.index'); 
    }
    
    public function create(){ 
        return view('admin.requirements.create');
    }

    public function view(){ 
        return view('admin.requirements.view'); 
    }

}
