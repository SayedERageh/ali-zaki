<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title_ar' => 'خطوط الشرب الأوتوماتيك',
                'title_en' => 'Automatic Drinking Lines',
                'slug' => 'automatic-drinking-lines',
                'short_description_ar' => 'خطوط شرب أوتوماتيك بنظام الحلمات تركي الصنع وأنواع أخرى.',
                'short_description_en' => 'Automatic nipple drinking lines, Turkish-made and other options.',
                'description_ar' => 'نوفر خطوط شرب أوتوماتيك بنظام الحلمات بجودة عالية، مع توفير أنواع تركية الصنع وخيارات أخرى تناسب مختلف احتياجات مزارع الدواجن.',
                'description_en' => 'We provide high-quality automatic nipple drinking lines, including Turkish-made systems and other options suitable for different poultry farm requirements.',
                'icon' => 'bi bi-droplet-half',
                'image' => 'services/drinking-lines.jpg',
                'sort_order' => 1,
                'is_active' => true,
            ],

            [
                'title_ar' => 'خطوط العلف Pan Feeder',
                'title_en' => 'Pan Feeder Feeding Lines',
                'slug' => 'pan-feeder-feeding-lines',
                'short_description_ar' => 'خطوط علف بنظام Pan Feeder تركي الصنع لمزارع الدواجن.',
                'short_description_en' => 'Turkish-made Pan Feeder feeding lines for poultry farms.',
                'description_ar' => 'نوفر خطوط علف بنظام Pan Feeder تركية الصنع، بتصميم عملي يساعد على توزيع العلف بكفاءة داخل مزارع الدواجن وتحسين عملية التغذية.',
                'description_en' => 'We supply Turkish-made Pan Feeder feeding lines designed for efficient feed distribution and improved feeding operations in poultry farms.',
                'icon' => 'bi bi-egg',
                'image' => 'services/pan-feeder.jpg',
                'sort_order' => 2,
                'is_active' => true,
            ],

            [
                'title_ar' => 'خلايا التبريد',
                'title_en' => 'Cooling Pads',
                'slug' => 'cooling-pads',
                'short_description_ar' => 'خلايا تبريد مستوردة ومحلية بجودة عالية لمزارع الدواجن.',
                'short_description_en' => 'High-quality imported and locally manufactured cooling pads.',
                'description_ar' => 'نوفر خلايا تبريد مستوردة ومحلية لمساعدة مزارع الدواجن على توفير بيئة مناسبة ودرجة حرارة ملائمة داخل العنابر، مع خيارات متعددة حسب احتياجات المزرعة.',
                'description_en' => 'We supply imported and locally manufactured cooling pads designed to help maintain suitable environmental conditions and temperature inside poultry houses.',
                'icon' => 'bi bi-wind',
                'image' => 'services/cooling-pads.jpg',
                'sort_order' => 3,
                'is_active' => true,
            ],

            [
                'title_ar' => 'معدات مزارع الدواجن',
                'title_en' => 'Poultry Farm Equipment',
                'slug' => 'poultry-farm-equipment',
                'short_description_ar' => 'مجموعة متنوعة من المعدات والحلول لمزارع الدواجن الحديثة.',
                'short_description_en' => 'A wide range of equipment and solutions for modern poultry farms.',
                'description_ar' => 'نوفر مجموعة متنوعة من معدات وحلول مزارع الدواجن، مع الحرص على تقديم منتجات موثوقة تناسب احتياجات التشغيل والتجهيز للمزارع الحديثة.',
                'description_en' => 'We provide a wide range of poultry farm equipment and solutions, offering reliable products suitable for modern farm installation and operational requirements.',
                'icon' => 'bi bi-tools',
                'image' => 'services/poultry-equipment.jpg',
                'sort_order' => 4,
                'is_active' => true,
            ],

            [
                'title_ar' => 'توريد المعدات',
                'title_en' => 'Equipment Supply',
                'slug' => 'equipment-supply',
                'short_description_ar' => 'توفير معدات مزارع الدواجن مع مخزون واسع وسرعة في التوريد.',
                'short_description_en' => 'Poultry equipment supply with wide stock availability and fast delivery.',
                'description_ar' => 'نحرص على توفير المنتجات المطلوبة بمخزون متنوع وسرعة في التوريد، لمساعدة أصحاب المزارع على الحصول على المعدات التي يحتاجون إليها في الوقت المناسب.',
                'description_en' => 'We maintain a diverse product stock and provide fast supply to help poultry farm owners get the equipment they need on time.',
                'icon' => 'bi bi-box-seam',
                'image' => 'services/equipment-supply.jpg',
                'sort_order' => 5,
                'is_active' => true,
            ],

            [
                'title_ar' => 'دعم ما بعد البيع',
                'title_en' => 'After-Sales Support',
                'slug' => 'after-sales-support',
                'short_description_ar' => 'دعم ومتابعة مستمرة لضمان أفضل استفادة من المعدات.',
                'short_description_en' => 'Ongoing support to ensure the best performance from your equipment.',
                'description_ar' => 'نقدم الدعم والمتابعة لعملائنا بعد توريد المعدات، ونحرص على مساعدتهم في الحصول على أفضل أداء واستفادة ممكنة من المنتجات.',
                'description_en' => 'We provide ongoing support and follow-up after equipment delivery to help our customers achieve the best possible performance from their products.',
                'icon' => 'bi bi-headset',
                'image' => 'services/after-sales.jpg',
                'sort_order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['slug' => $service['slug']],
                $service
            );
        }
    }
}
       
