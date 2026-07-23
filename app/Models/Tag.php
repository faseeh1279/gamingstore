<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Game; 

class Tag extends Model
{
    protected $fillable = [
        'name',
        'slug'
    ];
    public function games()
    {
        return $this->belongsToMany(Game::class);
    }
}
