<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title_ar',
        'title_en',

        'slug',

        'category_ar',
        'category_en',

        'description_ar',
        'description_en',

        'location_ar',
        'location_en',

        'image',

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

    public function getCategoryAttribute(): ?string
    {
        return app()->getLocale() === 'ar'
            ? $this->category_ar
            : $this->category_en;
    }

    public function getDescriptionAttribute(): ?string
    {
        return app()->getLocale() === 'ar'
            ? $this->description_ar
            : $this->description_en;
    }

    public function getLocationAttribute(): ?string
    {
        return app()->getLocale() === 'ar'
            ? $this->location_ar
            : $this->location_en;
    }
}