<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        DB::table('gender')->insert([
            [
                'name' => 'Erkek',
                'color' => 'blue',
                'created_at' => now(),
            ],
            [
                'name' => 'Kadın',
                'color' => 'pink',
                'created_at' => now(),
            ],
            [
                'name' => 'Bilinmeyen',
                'color' => 'yellow',
                'created_at' => now(),
            ],
        ]);
    }
}
