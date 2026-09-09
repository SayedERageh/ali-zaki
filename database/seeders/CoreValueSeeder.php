<?php

namespace Database\Seeders;

use App\Models\CoreValue;
use Illuminate\Database\Seeder;

class CoreValueSeeder extends Seeder
{
    public function run(): void
    {
        $values = [
            [
                'title_ar' => 'الجودة أساس النجاح',
                'title_en' => 'Quality First',
                'description_ar' => 'نحرص على توفير معدات عالية الجودة تلبي احتياجات مزارع الدواجن وتضمن أداءً موثوقًا.',
                'description_en' => 'We provide high-quality poultry farm equipment designed to meet customer needs and deliver reliable performance.',
                'icon' => 'bi bi-award',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'title_ar' => 'الاعتمادية',
                'title_en' => 'Reliability',
                'description_ar' => 'نوفر حلولًا ومعدات موثوقة تساعد أصحاب المزارع على تشغيل مزارعهم بكفاءة واستقرار.',
                'description_en' => 'We provide reliable equipment and solutions that help poultry farms operate efficiently and consistently.',
                'icon' => 'bi bi-check2-circle',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'title_ar' => 'منتجات موثوقة',
                'title_en' => 'Trusted Products',
                'description_ar' => 'نختار منتجاتنا بعناية من مصادر موثوقة لتقديم أفضل الحلول لمزارع الدواجن.',
                'description_en' => 'We carefully select products from trusted sources to provide the best solutions for poultry farms.',
                'icon' => 'bi bi-patch-check',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'title_ar' => 'سرعة التوريد',
                'title_en' => 'Fast Delivery',
                'description_ar' => 'نحرص على توفير المنتجات وسرعة التوصيل لتلبية احتياجات العملاء في الوقت المناسب.',
                'description_en' => 'We focus on product availability and fast delivery to meet our customers’ needs on time.',
                'icon' => 'bi bi-truck',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'title_ar' => 'دعم ما بعد البيع',
                'title_en' => 'After-Sales Support',
                'description_ar' => 'نستمر في دعم عملائنا وتقديم المساعدة اللازمة حتى بعد توريد المعدات.',
                'description_en' => 'We continue to support our customers and provide the assistance they need after equipment delivery.',
                'icon' => 'bi bi-headset',
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'title_ar' => 'رضا العملاء',
                'title_en' => 'Customer Satisfaction',
                'description_ar' => 'نبني علاقات طويلة الأمد مع عملائنا من خلال فهم احتياجاتهم وتقديم حلول مناسبة وفعالة.',
                'description_en' => 'We build long-term relationships by understanding our customers’ needs and providing effective solutions.',
                'icon' => 'bi bi-people',
                'sort_order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($values as $value) {
            CoreValue::updateOrCreate(
                ['title_en' => $value['title_en']],
                $value
            );
        }
    }
}
    
