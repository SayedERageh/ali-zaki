<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::query()->delete();

        $products = [

            [
                'name_ar' => 'خطوط شرب أوتوماتيك بنظام الحلمات',
                'name_en' => 'Automatic Nipple Drinking Lines',

                'slug' => 'automatic-nipple-drinking-lines',

                'description_ar' =>
                    'خطوط شرب أوتوماتيك بنظام الحلمات، تركي الصنع وأنواع أخرى، لتوفير مياه الشرب بشكل منتظم وفعال داخل مزارع الدواجن.',

                'description_en' =>
                    'Automatic nipple drinking lines, Turkish made and other options, designed to provide efficient and consistent water supply for poultry farms.',

                'image' => 'products/automatic-drinking-lines.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 1,
            ],

            [
                'name_ar' => 'خطوط علف بان فيدر',
                'name_en' => 'Pan Feeder Feeding Lines',

                'slug' => 'pan-feeder-feeding-lines',

                'description_ar' =>
                    'خطوط علف بنظام Pan Feeder، تركي الصنع وأنواع أخرى، لتوفير نظام تغذية عملي وفعال لمزارع الدواجن.',

                'description_en' =>
                    'Pan Feeder feeding lines, Turkish made and other options, providing an efficient and practical feeding system for poultry farms.',

                'image' => 'products/pan-feeder.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 2,
            ],

            [
                'name_ar' => 'خلايا تبريد',
                'name_en' => 'Cooling Pads',

                'slug' => 'cooling-pads',

                'description_ar' =>
                    'خلايا تبريد مستوردة ومحلية لتوفير حلول تبريد فعالة ومناسبة لمزارع الدواجن.',

                'description_en' =>
                    'Imported and locally manufactured cooling pads providing effective cooling solutions for poultry farms.',

                'image' => 'products/cooling-pads.jpg',

                'price' => null,

                'is_active' => true,

                'sort_order' => 3,
            ],

        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}