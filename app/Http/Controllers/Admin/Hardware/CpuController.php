<?php

namespace App\Http\Controllers\Admin\Hardware;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CpuController extends Controller
{
    public function index(){ 
        return view('admin.hardware.cpu.index');
    }

    public function create(){ 
        return view('admin.hardware.cpu.create'); 
    }

    public function show(){ 
        return view('admin.hardware.cpu.view'); 
    }
}
