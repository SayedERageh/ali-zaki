<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSection extends Model
{
    protected $fillable = [
        'key',

        'title_ar',
        'title_en',

        'subtitle_ar',
        'subtitle_en',

        'description_ar',
        'description_en',

        'button_text_ar',
        'button_text_en',

        'button_url',

        'image',

        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function getTitleAttribute(): ?string
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

    public static function get(string $key): ?self
    {
        return static::query()
            ->where('key', $key)
            ->where('is_active', true)
            ->first();
    }
}