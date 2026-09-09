<?php

namespace App\Filament\Resources\Products\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('image')
                    ->label('الصورة')
                    ->disk('public')
                    ->circular(),

                TextColumn::make('name_ar')
                    ->label('اسم المنتج')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('name_en')
                    ->label('English Name')
                    ->searchable()
                    ->toggleable(),

                TextColumn::make('price')
                    ->label('السعر')
                    ->money('EGP')
                    ->sortable(),

                ToggleColumn::make('is_active')
                    ->label('نشط'),

                TextColumn::make('sort_order')
                    ->label('الترتيب')
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('تاريخ الإضافة')
                    ->dateTime('d/m/Y')
                    ->sortable()
                    ->toggleable(),

            ])
            ->filters([
                //
            ])
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