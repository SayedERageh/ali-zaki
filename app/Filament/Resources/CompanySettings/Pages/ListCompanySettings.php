<?php

namespace App\Filament\Resources\CompanySettings\Pages;

use App\Filament\Resources\CompanySettings\CompanySettingResource;
use App\Models\CompanySetting;
use Filament\Resources\Pages\ListRecords;

class ListCompanySettings extends ListRecords
{
    protected static string $resource = CompanySettingResource::class;

    public function mount(): void
    {
        parent::mount();

        $setting = CompanySetting::current();

        $this->redirect(
            CompanySettingResource::getUrl('edit', [
                'record' => $setting->getKey(),
            ])
        );
    }

    protected function getHeaderActions(): array
    {
        return [];
    }
}