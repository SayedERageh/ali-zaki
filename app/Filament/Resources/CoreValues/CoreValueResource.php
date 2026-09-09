<?php

namespace App\Filament\Resources\CoreValues;

use App\Filament\Resources\CoreValues\Pages\CreateCoreValue;
use App\Filament\Resources\CoreValues\Pages\EditCoreValue;
use App\Filament\Resources\CoreValues\Pages\ListCoreValues;
use App\Filament\Resources\CoreValues\Schemas\CoreValueForm;
use App\Filament\Resources\CoreValues\Tables\CoreValuesTable;
use App\Models\CoreValue;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CoreValueResource extends Resource
{
    protected static ?string $model = CoreValue::class;

// اسم العنصر في السيد بار
protected static ?string $navigationLabel = 'القيم الأساسية';

// اسم المجموعة
protected static string|\UnitEnum|null $navigationGroup = 'إدارة الموقع';

// ترتيب العنصر
protected static ?int $navigationSort = 3;

// أيقونة السيد بار
protected static string|BackedEnum|null $navigationIcon =
    Heroicon::OutlinedStar;

// اسم الموديل
protected static ?string $modelLabel = 'قيمة أساسية';

// اسم الجمع
protected static ?string $pluralModelLabel = 'القيم الأساسية';
    public static function form(Schema $schema): Schema
    {
        return CoreValueForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CoreValuesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCoreValues::route('/'),
            'create' => CreateCoreValue::route('/create'),
            'edit' => EditCoreValue::route('/{record}/edit'),
        ];
    }
}
