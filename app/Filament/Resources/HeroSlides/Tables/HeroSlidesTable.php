<?php

namespace App\Filament\Resources\HeroSlides\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class HeroSlidesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('الصورة')
                    ->disk('public')
                    ->square(),

                TextColumn::make('title_ar')
                    ->label('العنوان')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('title_en')
                    ->label('Title')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('sort_order')
                    ->label('الترتيب')
                    ->sortable(),

                ToggleColumn::make('is_active')
                    ->label('مفعل'),
            ])
            ->defaultSort('sort_order')
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}