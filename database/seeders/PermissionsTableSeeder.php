<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            ['name' => 'Vatandaş', 'category' => 'Kullanıcı'],
            ['name' => 'Müdür', 'category' => 'Bilgi İlşem'],
            ['name' => 'Personel', 'category' => 'Bilgi İlşem'],
            ['name' => 'Vergi', 'category' => 'Personel'],
            ['name' => 'Tapu', 'category' => 'Personel'],
            ['name' => 'Zabıta', 'category' => 'Personel'],

        ]);
    }
}
