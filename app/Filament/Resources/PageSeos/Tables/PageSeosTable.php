<?php

namespace App\Filament\Resources\PageSeos\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class PageSeosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('page_key')
                    ->label('الصفحة')
                    ->formatStateUsing(fn ($state) => match ($state) {
                        'home' => 'الرئيسية',
                        'about' => 'من نحن',
                        'services' => 'الخدمات',
                        'projects' => 'المشروعات',
                        'contact' => 'تواصل معنا',
                        default => $state,
                    })
                    ->badge()
                    ->sortable()
                    ->searchable(),

                TextColumn::make('title_ar')
                    ->label('عنوان SEO')
                    ->limit(50)
                    ->searchable()
                    ->toggleable(),

                TextColumn::make('description_ar')
                    ->label('الوصف')
                    ->limit(60)
                    ->wrap()
                    ->toggleable(),

                IconColumn::make('index')
                    ->label('Index')
                    ->boolean(),

                IconColumn::make('follow')
                    ->label('Follow')
                    ->boolean(),

                TextColumn::make('updated_at')
                    ->label('آخر تحديث')
                    ->dateTime('Y-m-d H:i')
                    ->sortable()
                    ->toggleable(),

            ])

            ->filters([

                SelectFilter::make('page_key')
                    ->label('الصفحة')
                    ->options([
                        'home' => 'الرئيسية',
                        'about' => 'من نحن',
                        'services' => 'الخدمات',
                        'projects' => 'المشروعات',
                        'contact' => 'تواصل معنا',
                    ]),

                SelectFilter::make('index')
                    ->label('الأرشفة')
                    ->options([
                        '1' => 'مسموح',
                        '0' => 'ممنوع',
                    ]),

                SelectFilter::make('follow')
                    ->label('تتبع الروابط')
                    ->options([
                        '1' => 'مسموح',
                        '0' => 'ممنوع',
                    ]),

            ])

            ->recordActions([
                EditAction::make(),
            ])

            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])

            ->defaultSort('page_key');
    }
}