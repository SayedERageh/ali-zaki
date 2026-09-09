<?php

namespace App\Filament\Resources\SiteSettings\Tables;

use Filament\Actions\EditAction;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SiteSettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('site_name')
                    ->label('اسم الموقع')
                    ->searchable()
                    ->sortable(),

                ColorColumn::make('primary_color')
                    ->label('اللون الأساسي'),

                ColorColumn::make('primary_dark_color')
                    ->label('الأساسي الغامق'),

                ColorColumn::make('secondary_color')
                    ->label('اللون الثانوي'),

                ColorColumn::make('secondary_dark_color')
                    ->label('الثانوي الغامق'),

                ColorColumn::make('light_blue_color')
                    ->label('الأزرق الفاتح'),

                ColorColumn::make('text_color')
                    ->label('النص'),

                TextColumn::make('updated_at')
                    ->label('آخر تحديث')
                    ->dateTime('Y-m-d H:i')
                    ->sortable(),

            ])
            ->recordActions([
                EditAction::make()
                    ->label('تعديل'),
            ])
            ->defaultSort('id');
    }
}