<?php

namespace Database\Seeders;

use App\Models\CompanySetting;
use Illuminate\Database\Seeder;

class CompanySettingSeeder extends Seeder
{
    public function run(): void
    {
        CompanySetting::updateOrCreate(
            ['id' => 1],
            [
                'company_name_en' => 'Ali Zaki Poultry Farm Equipment',
                'company_name_ar' => 'المكتب الاستشاري المصري علي زكي لمعدات مزارع الدواجن',

                'email' => 'ibrahim.ali@ali-zaki.com',
                'phone' => '+201210222225',
                'whatsapp' => '+201210222225',

                'about_en' => <<<'TEXT'
Ali Zaki Egyptian Consulting Office specializes in supplying and providing high-quality equipment and solutions for poultry farms.

We offer a wide range of poultry farm equipment, including automatic nipple drinking lines, Pan Feeder feeding lines, cooling pads, and other poultry farming solutions.

Our products include Turkish-made drinking and feeding systems, as well as imported and locally manufactured cooling pads and other equipment selected to meet the needs of modern poultry farms.

We focus on providing reliable products, high-quality equipment, and practical solutions that help poultry farm owners improve productivity, maintain efficient operations, and achieve better performance.

With our experience and commitment to quality, we aim to provide our customers with reliable equipment, professional support, and dependable after-sales service.
TEXT,

                'about_ar' => <<<'TEXT'
المكتب الاستشاري المصري علي زكي متخصص في توريد وتوفير معدات وحلول عالية الجودة لمزارع الدواجن.

نقدم مجموعة متنوعة من معدات مزارع الدواجن، تشمل خطوط الشرب الأوتوماتيكية بنظام الحلمات، وخطوط العلف بنظام الـ Pan Feeder، وخلايا التبريد، بالإضافة إلى العديد من المعدات والحلول الأخرى التي تناسب احتياجات مزارع الدواجن الحديثة.

نوفر خطوط شرب أوتوماتيك بنظام الحلمات تركية الصنع، وخطوط علف Pan Feeder تركية الصنع، بالإضافة إلى خلايا تبريد مستوردة ومحلية، مع الحرص على توفير منتجات تتميز بالجودة والاعتمادية.

نعمل على توفير معدات موثوقة وحلول عملية تساعد أصحاب المزارع على تحسين كفاءة التشغيل ورفع الإنتاجية وتحقيق أفضل أداء ممكن.

ونضع الجودة والاعتمادية وخدمة العملاء في مقدمة أولوياتنا، مع توفير الدعم والمتابعة وخدمات ما بعد البيع.
TEXT,

                'vision_en' => <<<'TEXT'
To become a leading and trusted supplier of poultry farm equipment in Egypt and the region, recognized for high-quality products, reliable solutions, professional service, and long-term customer relationships.
TEXT,

                'vision_ar' => <<<'TEXT'
أن نصبح من الشركات الرائدة والموثوقة في مجال توريد معدات مزارع الدواجن في مصر والمنطقة، من خلال تقديم منتجات عالية الجودة وحلول موثوقة وخدمة احترافية وبناء علاقات طويلة الأمد مع عملائنا.
TEXT,

                'mission_en' => <<<'TEXT'
Our mission is to provide poultry farm owners with high-quality, reliable, and efficient equipment that meets the requirements of modern poultry production.

We are committed to offering trusted products, professional support, fast delivery, and effective after-sales service while continuously improving our products and services to meet our customers' needs.
TEXT,

                'mission_ar' => <<<'TEXT'
مهمتنا هي توفير معدات عالية الجودة وموثوقة وفعالة لأصحاب مزارع الدواجن بما يتناسب مع متطلبات الإنتاج الحديث.

نلتزم بتوفير منتجات موثوقة، ودعم احترافي، وسرعة في التوصيل، وخدمة متميزة بعد البيع، مع العمل المستمر على تطوير منتجاتنا وخدماتنا لتلبية احتياجات عملائنا.
TEXT,

                'commitment_en' => <<<'TEXT'
We are committed to providing high-quality poultry farm equipment and reliable solutions that our customers can depend on.

Our product range includes:

- Automatic Nipple Drinking Lines – Turkish Made
- Pan Feeder Feeding Lines – Turkish Made
- Cooling Pads – Imported and Locally Manufactured
- Other Poultry Farm Equipment and Solutions

We believe that quality is the foundation of success. Therefore, we carefully select our products and work to provide reliable equipment, competitive solutions, fast delivery, wide stock availability, and professional after-sales support.

QUALITY IS THE FOUNDATION OF SUCCESS.

Reliable Equipment. Professional Support. Better Performance.
TEXT,

                'commitment_ar' => <<<'TEXT'
نحن ملتزمون بتوفير معدات عالية الجودة وحلول موثوقة لمزارع الدواجن، بما يساعد عملاءنا على تحقيق أفضل أداء وكفاءة في التشغيل.

تشمل أهم منتجاتنا:

- خطوط شرب أوتوماتيك بنظام الحلمات – تركي الصنع
- خطوط علف بنظام Pan Feeder – تركي الصنع
- خلايا تبريد – مستورد ومحلي
- مجموعة متنوعة من معدات وحلول مزارع الدواجن

نؤمن بأن الجودة هي أساس النجاح، ولذلك نحرص على اختيار منتجات موثوقة وتقديم حلول مناسبة لاحتياجات مزارع الدواجن.

كما نحرص على توفير دعم ما بعد البيع، وسرعة التوصيل، وتوافر مخزون واسع من المنتجات، إلى جانب تقديم خدمة احترافية لعملائنا.

الجودة أساس النجاح.

معدات موثوقة. دعم احترافي. أداء أفضل.
TEXT,

                'address_en' => 'Abdel Hamid Abu Haif Street, Heliopolis, Cairo, Egypt',
                'address_ar' => 'شارع عبد الحميد أبو هيف، هليوبوليس، القاهرة، مصر',
            ]
        );
    }
}
  
