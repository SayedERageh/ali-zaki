<?php

namespace Database\Seeders;

use App\Models\HeroSlide;
use Illuminate\Database\Seeder;

class HeroSlideSeeder extends Seeder
{
    public function run(): void
    {
        HeroSlide::query()->delete();

        HeroSlide::create([
            'title_ar' => 'معدات مزارع الدواجن بأعلى جودة',
            'title_en' => 'High-Quality Poultry Farm Equipment',

            'subtitle_ar' => 'المكتب الاستشاري المصري علي زكي',
            'subtitle_en' => 'Ali Zaki Egyptian Consulting Office',

            'description_ar' => 'نوفر مجموعة متكاملة من معدات مزارع الدواجن، تشمل خطوط الشرب الأوتوماتيك وخطوط العلف وخلايا التبريد، بجودة موثوقة وحلول تناسب احتياجات المزارع الحديثة.',
            'description_en' => 'We provide a wide range of poultry farm equipment, including automatic drinking lines, feeding systems, and cooling pads, with reliable quality and solutions for modern poultry farms.',

            'image' => 'hero-slides/slide-1.jpg',

            'button_text_ar' => 'اكتشف منتجاتنا',
            'button_text_en' => 'Explore Our Products',
            'button_url' => '/services',

            'secondary_button_text_ar' => 'تواصل معنا',
            'secondary_button_text_en' => 'Contact Us',
            'secondary_button_url' => '/contact',

            'sort_order' => 1,
            'is_active' => true,
        ]);

        HeroSlide::create([
            'title_ar' => 'خطوط شرب أوتوماتيك بنظام الحلمات',
            'title_en' => 'Automatic Nipple Drinking Lines',

            'subtitle_ar' => 'تركي الصنع وأنواع أخرى',
            'subtitle_en' => 'Turkish Made & Other Options',

            'description_ar' => 'نوفر خطوط شرب أوتوماتيك بنظام الحلمات بجودة عالية، مع خيارات متعددة تناسب مختلف أنواع ومقاسات مزارع الدواجن.',
            'description_en' => 'We supply high-quality automatic nipple drinking lines with multiple options suitable for different poultry farm systems and requirements.',

            'image' => 'hero-slides/slide-2.jpg',

            'button_text_ar' => 'اطلب الآن',
            'button_text_en' => 'Request Now',
            'button_url' => '/contact',

            'secondary_button_text_ar' => 'اعرف المزيد',
            'secondary_button_text_en' => 'Learn More',
            'secondary_button_url' => '/about',

            'sort_order' => 2,
            'is_active' => true,
        ]);

        HeroSlide::create([
            'title_ar' => 'خطوط علف Pan Feeder وخلايا التبريد',
            'title_en' => 'Pan Feeder Lines & Cooling Pads',

            'subtitle_ar' => 'حلول متكاملة لمزارع الدواجن',
            'subtitle_en' => 'Complete Solutions for Poultry Farms',

            'description_ar' => 'خطوط علف Pan Feeder تركية الصنع، وخلايا تبريد مستوردة ومحلية، بالإضافة إلى مجموعة متنوعة من معدات مزارع الدواجن.',
            'description_en' => 'Turkish-made Pan Feeder feeding lines, imported and locally manufactured cooling pads, and a wide range of poultry farm equipment.',

            'image' => 'hero-slides/slide-3.jpg',

            'button_text_ar' => 'تصفح منتجاتنا',
            'button_text_en' => 'Browse Our Products',
            'button_url' => '/services',

            'secondary_button_text_ar' => 'اطلب عرض سعر',
            'secondary_button_text_en' => 'Request a Quote',
            'secondary_button_url' => '/contact',

            'sort_order' => 3,
            'is_active' => true,
        ]);
    }
}
     
