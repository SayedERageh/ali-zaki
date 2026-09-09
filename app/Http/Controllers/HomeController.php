<?php

namespace App\Http\Controllers;

use App\Models\CompanySetting;
use App\Models\CoreValue;
use App\Models\HeroSlide;
use App\Models\HomeSection;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        // بيانات الشركة
        $company = CompanySetting::current();

        // السلايدر الرئيسي
        $heroSlides = HeroSlide::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        // الخدمات
        $services = Service::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        // المنتجات
        // سيتم عرض المنتجات المفعلة فقط
        $products = Product::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        // القيم الأساسية
        $coreValues = CoreValue::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        // المشروعات
        $projects = Project::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        // أقسام الصفحة الرئيسية
        // HomeSection لا يحتوي على sort_order
        $homeSections = HomeSection::query()
            ->where('is_active', true)
            ->get()
            ->keyBy('key');

        // اللغة الحالية
        $locale = app()->getLocale();

        return view('pages.home', compact(
            'company',
            'heroSlides',
            'services',
            'products',
            'coreValues',
            'projects',
            'homeSections',
            'locale'
        ));
    }
}