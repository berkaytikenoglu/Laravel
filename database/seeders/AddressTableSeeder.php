<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('addresses')->insert([

            [

                "description" => "Bimin üstünde 5.kat",
                "insidedoor" => "6",
                "outdoor" => "428",
                "street" => "Ara Caddesi",
                "neighbourhood" => "Mustafa Kemal Paia Mahallesi",
                "city" => "Fatsa",
                "province" => "Ordu",
                "country" => "Turkey",
                "postal_code" => "52400",
                'created_at' => now(),

            ],
        ]);
    }
}
