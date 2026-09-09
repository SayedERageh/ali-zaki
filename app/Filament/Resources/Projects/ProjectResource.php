<?php

namespace App\Filament\Resources\Projects;

use App\Filament\Resources\Projects\Pages\CreateProject;
use App\Filament\Resources\Projects\Pages\EditProject;
use App\Filament\Resources\Projects\Pages\ListProjects;
use App\Filament\Resources\Projects\Schemas\ProjectForm;
use App\Filament\Resources\Projects\Tables\ProjectsTable;
use App\Models\Project;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

// اسم العنصر في السيد بار
protected static ?string $navigationLabel = 'المشروعات';

// اسم المجموعة
protected static string|\UnitEnum|null $navigationGroup = 'إدارة الموقع';

// ترتيب العنصر
protected static ?int $navigationSort = 4;

// أيقونة السيد بار
protected static string|BackedEnum|null $navigationIcon =
    Heroicon::OutlinedBuildingOffice2;

// اسم الموديل
protected static ?string $modelLabel = 'مشروع';

// اسم الجمع
protected static ?string $pluralModelLabel = 'المشروعات';
    public static function form(Schema $schema): Schema
    {
        return ProjectForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProjectsTable::configure($table);
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
            'index' => ListProjects::route('/'),
            'create' => CreateProject::route('/create'),
            'edit' => EditProject::route('/{record}/edit'),
        ];
    }
}
