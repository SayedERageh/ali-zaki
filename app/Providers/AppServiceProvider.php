<?php

namespace App\Providers;

use App\Models\CompanySetting;
use App\Models\Service;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        App::setLocale(
            session('locale', config('app.locale', 'ar'))
        );

        View::composer('*', function ($view) {
            $view->with([
                'company' => CompanySetting::current(),

                'services' => Service::query()
                    ->where('is_active', true)
                    ->orderBy('sort_order')
                    ->get(),
            ]);
        });
    }
}