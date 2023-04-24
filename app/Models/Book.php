<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Book extends Model
{
    use HasFactory;
    use HasSlug;

    const RATING = [
        1 => '★',
        2 => '★★',
        3 => '★★★',
        4 => '★★★★',
        5 => '★★★★★',
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    protected $fillable = [
        'title',
        'slug',
        'author',
        'description',
        'rating',
        'cover',
    ];
}
