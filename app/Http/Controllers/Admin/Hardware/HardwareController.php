<?php

namespace App\Http\Controllers\Admin\Hardware;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HardwareController extends Controller
{
    public function index(){ 
        return view('admin.hardware.index'); 
    }
}
