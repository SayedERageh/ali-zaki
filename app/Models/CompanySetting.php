<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanySetting extends Model
{
    protected $fillable = [
        'company_name_ar',
        'company_name_en',

        'email',
        'phone',
        'whatsapp',

        'logo',

        'about_ar',
        'about_en',

        'vision_ar',
        'vision_en',

        'mission_ar',
        'mission_en',

        'commitment_ar',
        'commitment_en',

        'address_ar',
        'address_en',
    ];

    public static function current(): self
    {
        return static::firstOrCreate(
            ['id' => 1],
            [
                'company_name_ar' => 'تبرك',
                'company_name_en' => 'Tabarak Scaffold Services',
            ]
        );
    }

    public function getCompanyNameAttribute(): string
    {
        return app()->getLocale() === 'ar'
            ? $this->company_name_ar
            : $this->company_name_en;
    }

    public function getAboutAttribute(): ?string
    {
        return app()->getLocale() === 'ar'
            ? $this->about_ar
            : $this->about_en;
    }

    public function getVisionAttribute(): ?string
    {
        return app()->getLocale() === 'ar'
            ? $this->vision_ar
            : $this->vision_en;
    }

    public function getMissionAttribute(): ?string
    {
        return app()->getLocale() === 'ar'
            ? $this->mission_ar
            : $this->mission_en;
    }

    public function getCommitmentAttribute(): ?string
    {
        return app()->getLocale() === 'ar'
            ? $this->commitment_ar
            : $this->commitment_en;
    }

    public function getAddressAttribute(): ?string
    {
        return app()->getLocale() === 'ar'
            ? $this->address_ar
            : $this->address_en;
    }
}