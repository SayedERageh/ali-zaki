<?php

namespace Database\Seeders;

use App\Models\HomeSection;
use Illuminate\Database\Seeder;

class HomeSectionSeeder extends Seeder
{
    public function run(): void
    {
        $sections = [
            [
                'key' => 'about',
                'title_ar' => 'من نحن',
                'title_en' => 'ABOUT US',
                'subtitle_ar' => 'خبرة موثوقة في معدات مزارع الدواجن',
                'subtitle_en' => 'Trusted Poultry Farm Equipment Expertise',
                'description_ar' => 'المكتب الاستشاري المصري علي زكي متخصص في توريد معدات مزارع الدواجن وتوفير حلول موثوقة وعالية الجودة تلبي احتياجات المزارع الحديثة.',
                'description_en' => 'Ali Zaki Egyptian Consulting Office specializes in supplying reliable, high-quality poultry farm equipment and solutions for modern poultry farms.',
                'button_text_ar' => 'اعرف المزيد',
                'button_text_en' => 'Learn More',
                'button_url' => '/about',
            ],

            [
                'key' => 'services',
                'title_ar' => 'منتجاتنا',
                'title_en' => 'OUR PRODUCTS',
                'subtitle_ar' => 'معدات وحلول متكاملة لمزارع الدواجن',
                'subtitle_en' => 'Complete Equipment Solutions for Poultry Farms',
                'description_ar' => 'نوفر مجموعة متنوعة من معدات مزارع الدواجن، تشمل خطوط الشرب الأوتوماتيك وخطوط العلف وخلايا التبريد وغيرها من الحلول.',
                'description_en' => 'We provide a wide range of poultry farm equipment, including automatic drinking lines, feeding systems, cooling pads, and other solutions.',
                'button_text_ar' => 'جميع المنتجات',
                'button_text_en' => 'All Products',
                'button_url' => '/services',
            ],

            [
                'key' => 'values',
                'title_ar' => 'قيمنا الأساسية',
                'title_en' => 'OUR CORE VALUES',
                'subtitle_ar' => 'الجودة والاعتمادية أساس عملنا',
                'subtitle_en' => 'Quality and Reliability at the Heart of Our Business',
                'description_ar' => 'نؤمن بأن الجودة أساس النجاح، ونحرص على تقديم معدات موثوقة وخدمة احترافية تلبي احتياجات عملائنا.',
                'description_en' => 'We believe quality is the foundation of success, and we are committed to providing reliable equipment and professional service.',
            ],

            [
                'key' => 'projects',
                'title_ar' => 'حلول مزارع الدواجن',
                'title_en' => 'POULTRY FARM SOLUTIONS',
                'subtitle_ar' => 'حلول تناسب احتياجات المزارع الحديثة',
                'subtitle_en' => 'Solutions for Modern Poultry Farms',
                'description_ar' => 'نوفر معدات وحلولًا مناسبة لمختلف احتياجات مزارع الدواجن، مع خيارات متعددة من المنتجات المحلية والمستوردة.',
                'description_en' => 'We provide equipment and solutions for different poultry farm requirements, with a variety of imported and locally manufactured products.',
                'button_text_ar' => 'اكتشف حلولنا',
                'button_text_en' => 'Explore Our Solutions',
                'button_url' => '/services',
            ],

            [
                'key' => 'commitment',
                'title_ar' => 'التزامنا',
                'title_en' => 'OUR COMMITMENT',
                'subtitle_ar' => 'شريك يعتمد عليه في معدات الدواجن',
                'subtitle_en' => 'A Reliable Poultry Equipment Partner',
                'description_ar' => 'نلتزم بتوفير منتجات عالية الجودة، وتوصيل سريع، ومخزون واسع، ودعم متميز لخدمة عملائنا قبل وبعد البيع.',
                'description_en' => 'We are committed to providing high-quality products, fast delivery, wide stock availability, and professional support before and after sales.',
            ],

            [
                'key' => 'cta',
                'title_ar' => 'تحتاج معدات لمزرعة الدواجن؟',
                'title_en' => 'NEED POULTRY FARM EQUIPMENT?',
                'subtitle_ar' => 'نحن جاهزون لخدمتك',
                'subtitle_en' => 'WE ARE READY TO SERVE YOU',
                'description_ar' => 'تواصل معنا لمعرفة المنتجات المتاحة والحلول المناسبة لاحتياجات مزرعتك والحصول على أفضل خدمة.',
                'description_en' => 'Contact us to discover available products, find the right solutions for your farm, and receive professional service.',
                'button_text_ar' => 'تواصل معنا',
                'button_text_en' => 'Contact Us',
                'button_url' => '/contact',
            ],
        ];

        foreach ($sections as $section) {
            HomeSection::updateOrCreate(
                ['key' => $section['key']],
                $section
            );
        }
    }
}
     
