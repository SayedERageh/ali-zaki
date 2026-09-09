<?php

namespace App\Filament\Resources\HomeSections\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HomeSectionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('key')
                    ->label('القسم')
                    ->formatStateUsing(fn (?string $state): string => match ($state) {
                        'about' => 'من نحن',
                        'services' => 'الخدمات',
                        'values' => 'القيم الأساسية',
                        'projects' => 'المشروعات',
                        'commitment' => 'التزامنا',
                        'cta' => 'دعوة للتواصل',
                        default => $state ?? '-',
                    })
                    ->badge()
                    ->searchable()
                    ->sortable(),

                TextColumn::make('title_ar')
                    ->label('العنوان العربي')
                    ->searchable()
                    ->limit(40),

                TextColumn::make('title_en')
                    ->label('English Title')
                    ->searchable()
                    ->limit(40),

                ImageColumn::make('image')
                    ->label('الصورة')
                    ->disk('public')
                    ->square()
                    ->size(60),

                IconColumn::make('is_active')
                    ->label('الحالة')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger'),

                TextColumn::make('updated_at')
                    ->label('آخر تحديث')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),

            ])

            ->filters([

                \Filament\Tables\Filters\TernaryFilter::make('is_active')
                    ->label('الحالة')
                    ->placeholder('الكل')
                    ->trueLabel('المفعلة')
                    ->falseLabel('المعطلة'),

            ])

            ->recordActions([
                EditAction::make()
                    ->label('تعديل'),
            ])

            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                        ->label('حذف المحدد'),
                ]),
            ])

            ->defaultSort('updated_at', 'desc');
    }
}

