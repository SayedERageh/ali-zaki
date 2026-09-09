<?php

namespace Database\Seeders;

use App\Models\PageSeo;
use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingsSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Site Settings
        |--------------------------------------------------------------------------
        */

        SiteSetting::updateOrCreate(
            ['id' => 1],
            [
                'site_name' => 'Ali Zaki Poultry Equipment',

                'primary_color' => '#2E7D32',
                'primary_dark_color' => '#1B5E20',

                'secondary_color' => '#263238',
                'secondary_dark_color' => '#37474F',

                'light_blue_color' => '#E8F5E9',
                'light_color' => '#F7FAF7',

                'white_color' => '#FFFFFF',

                'text_color' => '#263238',
                'muted_color' => '#6B777C',

                'border_color' => '#DDE5DF',

                'site_description' =>
                    'المكتب الاستشاري المصري علي زكي لمعدات مزارع الدواجن، متخصص في توريد خطوط الشرب الأوتوماتيك وخطوط العلف وخلايا التبريد ومعدات مزارع الدواجن.',
            ]
        );


        /*
        |--------------------------------------------------------------------------
        | SEO Pages
        |--------------------------------------------------------------------------
        */

        $pages = [

            /*
            |--------------------------------------------------------------------------
            | Home
            |--------------------------------------------------------------------------
            */

            'home' => [
                'title_ar' =>
                    'المكتب الاستشاري المصري علي زكي | معدات مزارع الدواجن',

                'title_en' =>
                    'Ali Zaki | Poultry Farm Equipment',

                'description_ar' =>
                    'المكتب الاستشاري المصري علي زكي لمعدات مزارع الدواجن، نوفر خطوط شرب أوتوماتيك بنظام الحلمات، خطوط علف Pan Feeder، خلايا تبريد ومعدات متنوعة لمزارع الدواجن.',

                'description_en' =>
                    'Ali Zaki Egyptian Consulting Office specializes in poultry farm equipment, including automatic nipple drinking lines, Pan Feeder feeding lines, cooling pads, and other poultry farm solutions.',

                'keywords_ar' =>
                    'معدات مزارع الدواجن, خطوط شرب أوتوماتيك, خطوط شرب حلمات, خطوط علف Pan Feeder, خلايا تبريد, معدات دواجن, تجهيز مزارع الدواجن, علي زكي',

                'keywords_en' =>
                    'poultry farm equipment, automatic drinking lines, nipple drinking system, Pan Feeder, cooling pads, poultry equipment, poultry farm solutions, Ali Zaki',

                'og_title_ar' =>
                    'المكتب الاستشاري المصري علي زكي لمعدات مزارع الدواجن',

                'og_title_en' =>
                    'Ali Zaki Poultry Farm Equipment',

                'og_description_ar' =>
                    'معدات وحلول موثوقة لمزارع الدواجن، تشمل خطوط الشرب وخطوط العلف وخلايا التبريد.',

                'og_description_en' =>
                    'Reliable poultry farm equipment and solutions including drinking lines, feeding systems, and cooling pads.',
            ],


            /*
            |--------------------------------------------------------------------------
            | About
            |--------------------------------------------------------------------------
            */

            'about' => [
                'title_ar' =>
                    'من نحن | المكتب الاستشاري المصري علي زكي',

                'title_en' =>
                    'About Us | Ali Zaki Poultry Equipment',

                'description_ar' =>
                    'تعرف على المكتب الاستشاري المصري علي زكي وخبرتنا في توريد معدات وحلول مزارع الدواجن عالية الجودة.',

                'description_en' =>
                    'Learn more about Ali Zaki Egyptian Consulting Office and our experience in supplying high-quality poultry farm equipment and solutions.',

                'keywords_ar' =>
                    'من نحن, علي زكي, معدات مزارع الدواجن, شركة معدات دواجن, تجهيز مزارع الدواجن',

                'keywords_en' =>
                    'about Ali Zaki, poultry equipment company, poultry farm equipment, poultry farm solutions',

                'og_title_ar' =>
                    'من نحن - علي زكي لمعدات مزارع الدواجن',

                'og_title_en' =>
                    'About Ali Zaki Poultry Equipment',

                'og_description_ar' =>
                    'تعرف على خبرتنا ومنتجاتنا وحلولنا في مجال معدات مزارع الدواجن.',

                'og_description_en' =>
                    'Learn about our experience, products, and solutions for poultry farms.',
            ],


            /*
            |--------------------------------------------------------------------------
            | Services / Products
            |--------------------------------------------------------------------------
            */

            'services' => [
                'title_ar' =>
                    'منتجاتنا | معدات مزارع الدواجن | علي زكي',

                'title_en' =>
                    'Products | Poultry Farm Equipment | Ali Zaki',

                'description_ar' =>
                    'اكتشف منتجات ومعدات مزارع الدواجن التي نوفرها، بما في ذلك خطوط الشرب الأوتوماتيك وخطوط العلف Pan Feeder وخلايا التبريد.',

                'description_en' =>
                    'Explore our poultry farm equipment, including automatic drinking lines, Pan Feeder feeding lines, cooling pads, and other poultry solutions.',

                'keywords_ar' =>
                    'منتجات دواجن, معدات دواجن, خطوط شرب, خطوط علف, Pan Feeder, خلايا تبريد, معدات مزارع',

                'keywords_en' =>
                    'poultry products, poultry equipment, drinking lines, feeding lines, Pan Feeder, cooling pads',

                'og_title_ar' =>
                    'منتجاتنا - معدات مزارع الدواجن',

                'og_title_en' =>
                    'Our Products - Poultry Farm Equipment',

                'og_description_ar' =>
                    'مجموعة من معدات وحلول مزارع الدواجن عالية الجودة.',

                'og_description_en' =>
                    'A range of high-quality poultry farm equipment and solutions.',
            ],


            /*
            |--------------------------------------------------------------------------
            | Projects / Solutions
            |--------------------------------------------------------------------------
            */

            'projects' => [
                'title_ar' =>
                    'حلول مزارع الدواجن | علي زكي',

                'title_en' =>
                    'Poultry Farm Solutions | Ali Zaki',

                'description_ar' =>
                    'اكتشف حلول ومعدات مزارع الدواجن التي يوفرها المكتب الاستشاري المصري علي زكي لتلبية احتياجات المزارع الحديثة.',

                'description_en' =>
                    'Explore poultry farm equipment and solutions provided by Ali Zaki to meet the requirements of modern poultry farms.',

                'keywords_ar' =>
                    'حلول مزارع الدواجن, معدات مزارع, تجهيز مزارع الدواجن, معدات دواجن, علي زكي',

                'keywords_en' =>
                    'poultry farm solutions, poultry equipment, poultry farm setup, Ali Zaki',

                'og_title_ar' =>
                    'حلول مزارع الدواجن - علي زكي',

                'og_title_en' =>
                    'Poultry Farm Solutions - Ali Zaki',

                'og_description_ar' =>
                    'معدات وحلول متنوعة لتجهيز وتشغيل مزارع الدواجن بكفاءة.',

                'og_description_en' =>
                    'Reliable equipment and solutions for efficient poultry farm setup and operation.',
            ],


            /*
            |--------------------------------------------------------------------------
            | Contact
            |--------------------------------------------------------------------------
            */

            'contact' => [
                'title_ar' =>
                    'تواصل معنا | علي زكي لمعدات مزارع الدواجن',

                'title_en' =>
                    'Contact Us | Ali Zaki Poultry Equipment',

                'description_ar' =>
                    'تواصل مع المكتب الاستشاري المصري علي زكي للاستفسار عن معدات مزارع الدواجن وخطوط الشرب والعلف وخلايا التبريد.',

                'description_en' =>
                    'Contact Ali Zaki for inquiries about poultry farm equipment, drinking lines, feeding systems, and cooling pads.',

                'keywords_ar' =>
                    'تواصل معنا, علي زكي, معدات دواجن, خطوط شرب, خطوط علف, خلايا تبريد',

                'keywords_en' =>
                    'contact Ali Zaki, poultry equipment, drinking lines, feeding lines, cooling pads',

                'og_title_ar' =>
                    'تواصل معنا - علي زكي لمعدات الدواجن',

                'og_title_en' =>
                    'Contact Us - Ali Zaki Poultry Equipment',

                'og_description_ar' =>
                    'تواصل معنا لمعرفة المنتجات المتاحة والحلول المناسبة لمزرعتك.',

                'og_description_en' =>
                    'Get in touch with us to learn about available products and the right solutions for your farm.',
            ],
        ];


        /*
        |--------------------------------------------------------------------------
        | Insert / Update SEO
        |--------------------------------------------------------------------------
        */

        foreach ($pages as $pageKey => $seo) {

            PageSeo::updateOrCreate(
                [
                    'page_key' => $pageKey,
                ],
                array_merge(
                    $seo,
                    [
                        'index' => true,
                        'follow' => true,
                    ]
                )
            );
        }
    }
}
        
