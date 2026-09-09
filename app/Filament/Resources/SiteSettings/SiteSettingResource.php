<?php

namespace App\Filament\Resources\SiteSettings;

use App\Filament\Resources\SiteSettings\Pages\CreateSiteSetting;
use App\Filament\Resources\SiteSettings\Pages\EditSiteSetting;
use App\Filament\Resources\SiteSettings\Pages\ListSiteSettings;
use App\Filament\Resources\SiteSettings\Schemas\SiteSettingForm;
use App\Filament\Resources\SiteSettings\Tables\SiteSettingsTable;
use App\Models\SiteSetting;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SiteSettingResource extends Resource
{
    protected static ?string $model = SiteSetting::class;

// اسم العنصر في السيد بار
protected static ?string $navigationLabel = 'ألوان الموقع';

// اسم المجموعة
protected static string|\UnitEnum|null $navigationGroup = 'الفاكيشن ';

// ترتيب العنصر
protected static ?int $navigationSort = 12;

// أيقونة السيد بار
protected static string|BackedEnum|null $navigationIcon =
    Heroicon::OutlinedSwatch;

// اسم الموديل
protected static ?string $modelLabel = 'لون الموقع';

// اسم الجمع
protected static ?string $pluralModelLabel = 'ألوان الموقع';
    public static function form(Schema $schema): Schema
    {
        return SiteSettingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SiteSettingsTable::configure($table);
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
            'index' => ListSiteSettings::route('/'),
            'create' => CreateSiteSetting::route('/create'),
            'edit' => EditSiteSetting::route('/{record}/edit'),
        ];
    }
}
