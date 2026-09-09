<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title_ar' => 'خطوط الشرب الأوتوماتيك',
                'title_en' => 'Automatic Drinking Lines',
                'slug' => 'automatic-drinking-lines',
                'category_ar' => 'خطوط الشرب',
                'category_en' => 'Drinking Lines',
                'description_ar' => 'توريد وتركيب خطوط شرب أوتوماتيك بنظام الحلمات، تركي الصنع وأنواع أخرى، لتوفير مياه الشرب بكفاءة داخل مزارع الدواجن.',
                'description_en' => 'Supply and installation of automatic nipple drinking lines, including Turkish-made systems and other options, designed for efficient water distribution in poultry farms.',
                'location_ar' => 'مصر',
                'location_en' => 'Egypt',
                'image' => 'projects/drinking-lines.jpg',
                'sort_order' => 1,
                'is_active' => true,
            ],

            [
                'title_ar' => 'خطوط العلف Pan Feeder',
                'title_en' => 'Pan Feeder Feeding Lines',
                'slug' => 'pan-feeder-feeding-lines',
                'category_ar' => 'خطوط العلف',
                'category_en' => 'Feeding Lines',
                'description_ar' => 'توريد خطوط علف بنظام Pan Feeder تركي الصنع، مع حلول مناسبة لمختلف احتياجات مزارع الدواجن.',
                'description_en' => 'Supply of Turkish-made Pan Feeder feeding lines with reliable solutions suitable for different poultry farm requirements.',
                'location_ar' => 'مصر',
                'location_en' => 'Egypt',
                'image' => 'projects/pan-feeder.jpg',
                'sort_order' => 2,
                'is_active' => true,
            ],

            [
                'title_ar' => 'خلايا التبريد',
                'title_en' => 'Cooling Pads',
                'slug' => 'cooling-pads',
                'category_ar' => 'التبريد',
                'category_en' => 'Cooling Systems',
                'description_ar' => 'توفير خلايا تبريد مستوردة ومحلية بجودة عالية للمساعدة على توفير بيئة مناسبة داخل مزارع الدواجن.',
                'description_en' => 'Supply of high-quality imported and locally manufactured cooling pads designed to help maintain suitable conditions inside poultry farms.',
                'location_ar' => 'مصر',
                'location_en' => 'Egypt',
                'image' => 'projects/cooling-pads.jpg',
                'sort_order' => 3,
                'is_active' => true,
            ],

            [
                'title_ar' => 'معدات مزارع الدواجن',
                'title_en' => 'Poultry Farm Equipment',
                'slug' => 'poultry-farm-equipment',
                'category_ar' => 'معدات الدواجن',
                'category_en' => 'Poultry Equipment',
                'description_ar' => 'مجموعة متنوعة من معدات وحلول مزارع الدواجن لتلبية احتياجات التشغيل والتجهيز للمزارع الحديثة.',
                'description_en' => 'A wide range of poultry farm equipment and solutions to meet the operational and installation needs of modern poultry farms.',
                'location_ar' => 'مصر',
                'location_en' => 'Egypt',
                'image' => 'projects/poultry-equipment.jpg',
                'sort_order' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(
                ['slug' => $project['slug']],
                $project
            );
        }
    }
}
      
