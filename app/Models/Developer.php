<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes; 
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use SoftDeletes;

    protected $fillable = [
    'name',
    'slug',
    'description',
    'website',
    'founded_year',
    'logo'
    ];

    protected $casts = [

        'is_active' => 'boolean',

    ];

    public function games()
    {
        return $this->hasMany(Game::class);
    }
}