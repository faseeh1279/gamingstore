<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class Cpu extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'manufacturer',
        'score', 
        'model',
        'cores',
        'threads',
        'base_clock',
        'boost_clock',
        'release_year',
        'is_active',
    ];
}
