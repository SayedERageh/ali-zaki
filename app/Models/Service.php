<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title_ar',
        'title_en',
        'slug',

        'short_description_ar',
        'short_description_en',

        'description_ar',
        'description_en',

        'image',
        'icon',

        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];

    public function getTitleAttribute(): string
    {
        return app()->getLocale() === 'ar'
            ? $this->title_ar
            : $this->title_en;
    }

    public function getShortDescriptionAttribute(): ?string
    {
        return app()->getLocale() === 'ar'
            ? $this->short_description_ar
            : $this->short_description_en;
    }

    public function getDescriptionAttribute(): ?string
    {
        return app()->getLocale() === 'ar'
            ? $this->description_ar
            : $this->description_en;
    }
}