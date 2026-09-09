<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'site_name',

        'primary_color',
        'primary_dark_color',

        'secondary_color',
        'secondary_dark_color',

        'light_blue_color',
        'light_color',

        'white_color',

        'text_color',
        'muted_color',

        'border_color',

        'logo',
        'favicon',

        'site_description',
    ];

    public static function current(): self
    {
        return static::firstOrCreate(
            ['id' => 1],
            [
                'site_name' => 'Tabarak',

                'primary_color' => '#55bce8',
                'primary_dark_color' => '#168dcc',

                'secondary_color' => '#061a2b',
                'secondary_dark_color' => '#0b2b43',

                'light_blue_color' => '#dff4fc',
                'light_color' => '#f5f8fa',

                'white_color' => '#ffffff',

                'text_color' => '#182b3a',
                'muted_color' => '#71808d',

                'border_color' => '#dfe7ec',
            ]
        );
    }
}