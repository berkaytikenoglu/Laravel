<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GendersTableSeeder extends Seeder
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
        DB::table('genders')->insert([
            [
                'name' => 'male',
                'color' => 'blue',
                'created_at' => now(),
            ],
            [
                'name' => 'female',
                'color' => 'pink',
                'created_at' => now(),
            ],
            [
                'name' => 'unknown',
                'color' => 'yellow',
                'created_at' => now(),
            ],
        ]);
    }
}
