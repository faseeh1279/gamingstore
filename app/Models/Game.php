<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

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
}
