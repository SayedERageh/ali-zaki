<?php

namespace App\Filament\Resources\SiteSettings\Pages;

use App\Filament\Resources\SiteSettings\SiteSettingResource;
use App\Models\SiteSetting;
use Filament\Resources\Pages\ListRecords;

class ListSiteSettings extends ListRecords
{
    protected static string $resource = SiteSettingResource::class;

    public function mount(): void
    {
        parent::mount();

        // الحصول على إعدادات الموقع الحالية
        $setting = SiteSetting::current();

        // الانتقال مباشرة إلى صفحة التعديل
        $this->redirect(
            SiteSettingResource::getUrl('edit', [
                'record' => $setting->getKey(),
            ])
        );
    }
}