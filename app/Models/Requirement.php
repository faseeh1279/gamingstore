<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; 

class Requirement extends Model
{
    protected $fillable = [
        'game_id', 'ram', 'storage', 'gpu'
    ];

    public function game():BelongsTo{ 
        return $this->belongsTo(Game::class, 'game_id'); 
    }
}
