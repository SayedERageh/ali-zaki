<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSlide extends Model
{
    protected $fillable = [
        'title_ar',
        'title_en',

        'subtitle_ar',
        'subtitle_en',

        'description_ar',
        'description_en',

        'image',

        'button_text_ar',
        'button_text_en',
        'button_url',

        'secondary_button_text_ar',
        'secondary_button_text_en',
        'secondary_button_url',

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

    public function getSubtitleAttribute(): ?string
    {
        return app()->getLocale() === 'ar'
            ? $this->subtitle_ar
            : $this->subtitle_en;
    }

    public function getDescriptionAttribute(): ?string
    {
        return app()->getLocale() === 'ar'
            ? $this->description_ar
            : $this->description_en;
    }

    public function getButtonTextAttribute(): ?string
    {
        return app()->getLocale() === 'ar'
            ? $this->button_text_ar
            : $this->button_text_en;
    }

    public function getSecondaryButtonTextAttribute(): ?string
    {
        return app()->getLocale() === 'ar'
            ? $this->secondary_button_text_ar
            : $this->secondary_button_text_en;
    }
}