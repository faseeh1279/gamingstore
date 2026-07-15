<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Game; 
use Illuminate\Database\Eloquent\Relations\BelongsTo; 


class MinimumRequirement extends Model
{
    protected $fillable = [
        'game_id',
        'cpu_id',
        'gpu_id',
        'operating_system',
        'ram',
        'storage',
        'directx_version',
        'sound_card',
        'additional_notes',
    ];

    public function game(): BelongsTo
    {
        return $this->belongsTo(Game::class);
    }
}
