<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Game extends Model
{
    protected $fillable = [ 
         'name', 'publisher', 'release_date'
    ];

    public function requirement(): HasOne { 
        return $this->hasOne(Requirement::class, 'game_id'); 
    }
    

    public function genres() { 
        return $this->belongsToMany(Genre::class); 
    }
}
