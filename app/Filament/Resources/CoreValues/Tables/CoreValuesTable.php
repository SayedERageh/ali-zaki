<?php

namespace App\Filament\Resources\CoreValues\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Support\HtmlString;

class CoreValuesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title_ar')
                    ->label('القيمة')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('title_en')
                    ->label('Value')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('icon')
                    ->label('الأيقونة')
                    ->formatStateUsing(
                        fn (?string $state): HtmlString => new HtmlString(
                            $state
                                ? '<i class="' . e($state) . '" style="font-size: 22px;"></i>'
                                : '<i class="bi bi-star" style="font-size: 22px;"></i>'
                        )
                    ),

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