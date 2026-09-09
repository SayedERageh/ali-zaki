<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageSeo extends Model
{
    protected $fillable = [
        'page_key',

        'title_ar',
        'title_en',

        'description_ar',
        'description_en',

        'keywords_ar',
        'keywords_en',

        'og_title_ar',
        'og_title_en',

        'og_description_ar',
        'og_description_en',

        'og_image',

        'canonical_url',

        'index',
        'follow',
    ];

    protected $casts = [
        'index' => 'boolean',
        'follow' => 'boolean',
    ];

    public static function forPage(string $pageKey): ?self
    {
        return static::where('page_key', $pageKey)->first();
    }
}