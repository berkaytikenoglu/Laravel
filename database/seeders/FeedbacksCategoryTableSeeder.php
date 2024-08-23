<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbacksCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('feedbacks_categories')->insert([
            [
                'name' => 'İstek',
                'description' => 'Belediyemizin İstek Bölümü, vatandaşlarımızın taleplerini iletebileceği bir platformdur. Daha iyi hizmet sunmak ve katılımcılığı artırmak için oluşturulmuş olup, tüm başvurular dikkatle değerlendirilir ve en kısa sürede geri dönüş yapılır',
                'color' => '#ff1100',
                'icon' => 'assignment',
                'created_at' => now(),

            ],
            [
                'name' => 'Şikayet',
                'description' => 'Belediyemizin Şikayet Bölümü, vatandaşlarımızın sorunlarını iletebileceği bir platformdur. Şikayetler titizlikle incelenir ve en kısa sürede geri dönüş yapılır.',
                'color' => '#1de047',
                'icon' => 'error',
                'created_at' => now(),

            ],
            [
                'name' => 'Proje Bildirimi',
                'description' => 'Belediyemizin Proje Bildirimi Bölümü, şehirle ilgili öneri ve projelerinizi iletebileceğiniz bir platformdur. Öneriler titizlikle değerlendirilir ve uygun olanlar hayata geçirilir.',
                'color' => '#008fd6',
                'icon' => 'engineering',
                'created_at' => now(),

            ],
            [
                'name' => 'Bilgi Talebi',
                'description' => 'Belediyemizin Bilgi Talebi Bölümü, bilgi taleplerinizi iletebileceğiniz bir platformdur. Şeffaflık ve erişilebilirlik için oluşturulmuş olup, talepleriniz titizlikle incelenir ve hızlıca geri dönüş sağlanır.',
                'color' => '#ff00ff',
                'icon' => 'search',
                'created_at' => now(),

            ],
            [
                'name' => 'İhbar',
                'description' => 'Belediyemizin İhbar Bölümü, vatandaşlarımızın ihbarlarını iletebileceği bir platformdur. Şeffaflık ve güvenlik amacıyla oluşturulmuş olup, ihbarlar titizlikle incelenir ve gerekli önlemler alınarak hızlıca geri dönüş sağlanır.',
                'color' => '#ffda05',
                'icon' => 'report',
                'created_at' => now(),

            ],
            [
                'name' => 'Teşekkür',
                'description' => 'Belediyemizin Teşekkür Bölümü, vatandaşlarımızın teşekkürlerini iletebileceği bir platformdur. Bu bölüm, memnuniyeti ve takdiri ifade etme amacıyla oluşturulmuştur. Teşekkürleriniz titizlikle değerlendirilir ve ilgili birimler tarafından dikkate alınır.',
                'color' => '#07e3df',
                'icon' => 'emoji_emotions',
                'created_at' => now(),

            ],
        ]);
    }
}
