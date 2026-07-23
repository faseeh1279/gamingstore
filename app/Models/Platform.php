<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 
use App\Models\Game; 

class Platform extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'logo',
        'description',
        'is_active',
    ];
    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
