<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Game; 
use App\Models\Cpu; 
use App\Models\Gpu; 

class RecommendedRequirement extends Model
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

    public function cpu()
    {
        return $this->belongsTo(Cpu::class);
    }

    public function gpu()
    {
        return $this->belongsTo(Gpu::class);
    }
}
