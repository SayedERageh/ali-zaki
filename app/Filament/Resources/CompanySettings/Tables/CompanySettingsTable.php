<?php

namespace App\Filament\Resources\CompanySettings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CompanySettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('logo')
                    ->label('Logo')
                    ->disk('public'),

                TextColumn::make('company_name_en')
                    ->label('Company Name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('company_name_ar')
                    ->label('اسم الشركة')
                    ->searchable(),

                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),

                TextColumn::make('phone')
                    ->label('Phone'),

                TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime()
                    ->sortable(),

            ])
            ->filters([

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