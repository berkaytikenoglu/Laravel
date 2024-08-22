<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('statuses')->insert([
            [
                'name' => 'pending',
                'color' => 'red',
                'created_at' => now()
            ],
            [
                'name' => 'completed',
                'color' => 'green',
                'created_at' => now()
            ],
            [
                'name' => 'inprogress',
                'color' => 'amber',
                'created_at' => now()
            ],
        ]);
    }
}
