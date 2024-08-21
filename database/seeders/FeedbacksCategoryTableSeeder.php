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
                'description' => 'Loremflsagşsjgşeskgşesokgeşs',
                'created_at' => now(),

            ],
            [
                'name' => 'Şikayet',
                'description' => 'Loremflsagşsjgşeskgşesokgeşs',
                'created_at' => now(),

            ],
            [
                'name' => 'Proje Bildirimi',
                'description' => 'Loremflsagşsjgşeskgşesokgeşs',

                'created_at' => now(),

            ],
            [
                'name' => 'Bilgi Talebi',
                'description' => 'Loremflsagşsjgşeskgşesokgeşs',
                'created_at' => now(),

            ],
            [
                'name' => 'İhbar',
                'description' => 'Loremflsagşsjgşeskgşesokgeşs',
                'created_at' => now(),

            ],
            [
                'name' => 'Teşekkür',
                'description' => 'Loremflsagşsjgşeskgşesokgeşs',
                'created_at' => now(),

            ],
        ]);
    }
}
