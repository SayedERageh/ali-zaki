<?php

namespace App\Filament\Resources\CompanySettings;

use App\Filament\Resources\CompanySettings\Pages\CreateCompanySetting;
use App\Filament\Resources\CompanySettings\Pages\EditCompanySetting;
use App\Filament\Resources\CompanySettings\Pages\ListCompanySettings;
use App\Filament\Resources\CompanySettings\Schemas\CompanySettingForm;
use App\Filament\Resources\CompanySettings\Tables\CompanySettingsTable;
use App\Models\CompanySetting;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CompanySettingResource extends Resource
{
    protected static ?string $model = CompanySetting::class;

// اسم العنصر في السيد بار
protected static ?string $navigationLabel = 'بيانات الشركة';

// اسم المجموعة
protected static string|\UnitEnum|null $navigationGroup = 'إعدادات الشركة';

// ترتيب العنصر
protected static ?int $navigationSort = 1;

// أيقونة السيد بار
protected static string|BackedEnum|null $navigationIcon =
    Heroicon::OutlinedBuildingOffice;

// اسم الموديل
protected static ?string $modelLabel = 'إعداد';

 // اسم الجمع
protected static ?string $pluralModelLabel = 'إعدادات الشركة';
    public static function form(Schema $schema): Schema
    {
        return CompanySettingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CompanySettingsTable::configure($table);
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
            'index' => ListCompanySettings::route('/'),
            'create' => CreateCompanySetting::route('/create'),
            'edit' => EditCompanySetting::route('/{record}/edit'),
        ];
    }
}
