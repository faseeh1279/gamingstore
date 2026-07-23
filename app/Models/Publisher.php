<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class Publisher extends Model
{
   use SoftDeletes;

    protected $fillable = [
        'name',
        'website',
        'logo',
        'description',
        'is_active',
    ];

    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
