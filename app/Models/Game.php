<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 
use App\Models\Developer; 
use App\Models\Publisher; 
use App\Models\Category; 
use App\Models\MinimumRequirement; 
use App\Models\RecommendedRequirement; 
use App\Models\Tag; 
use App\Models\Platform;

class Game extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'developer_id',
        'publisher_id',
        'category_id',
        'platform_id',
        'release_date',
        'cover_image',
        'banner_image',
        'description',
        'official_website',
        'is_active',
    ];

    protected $casts = [

        'release_date' => 'date',

        'is_active' => 'boolean',

    ];

    public function developer()
    {
        return $this->belongsTo(Developer::class);
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function minimumRequirement()
    {
        return $this->hasOne(MinimumRequirement::class);
    }

    public function recommendedRequirement()
    {
        return $this->hasOne(RecommendedRequirement::class);
    }
}
