<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class Gpu extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'manufacturer',
        'score', 
        'model',
        'vram',
        'release_year',
        'is_active',
    ];
}
