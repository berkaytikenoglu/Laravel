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
            [
                'name' => 'Vatandaş',
                'category' => 'Kullanıcı',
                'canshowadminpanel' => false,
                'canedituser' =>  false,
                'canresponserequest' =>  false,
                'canuploadavatar' => false,
                'canaddfeedbackcategory' => false,
                'candeletefeedbackcategory' => false,
                'canreportrequest' => false,
                'caneditmyprofile' => false,
                'created_at' => now(),
            ],
            [
                'name' => 'Müdür',
                'category' => 'Bilgi İşlem',
                'canshowadminpanel' => true,
                'canedituser' =>  true,
                'canresponserequest' =>  true,
                'canuploadavatar' => true,
                'canaddfeedbackcategory' => true,
                'candeletefeedbackcategory' => true,
                'canreportrequest' => true,
                'caneditmyprofile' => true,
                'created_at' => now(),

            ],
            [
                'name' => 'Personel',
                'category' => 'Bilgi İşlem',
                'canshowadminpanel' => false,
                'canedituser' =>  false,
                'canresponserequest' =>  false,
                'canuploadavatar' => false,
                'canaddfeedbackcategory' => false,
                'candeletefeedbackcategory' => false,
                'canreportrequest' => false,
                'caneditmyprofile' => false,
                'created_at' => now(),

            ],
            [
                'name' => 'Vergi',
                'category' => 'Personel',
                'canshowadminpanel' => false,
                'canedituser' =>  false,
                'canresponserequest' =>  false,
                'canuploadavatar' => false,
                'canaddfeedbackcategory' => false,
                'candeletefeedbackcategory' => false,
                'canreportrequest' => false,
                'caneditmyprofile' => false,
                'created_at' => now(),

            ],
            [
                'name' => 'Tapu',
                'category' => 'Personel',
                'canshowadminpanel' => false,
                'canedituser' =>  false,
                'canresponserequest' =>  false,
                'canuploadavatar' => false,
                'canaddfeedbackcategory' => false,
                'candeletefeedbackcategory' => false,
                'canreportrequest' => false,
                'caneditmyprofile' => false,
                'created_at' => now(),

            ],
            [
                'name' => 'Zabıta',
                'category' => 'Personel',
                'canshowadminpanel' => false,
                'canedituser' =>  false,
                'canresponserequest' =>  false,
                'canuploadavatar' => false,
                'canaddfeedbackcategory' => false,
                'candeletefeedbackcategory' => false,
                'canreportrequest' => false,
                'caneditmyprofile' => false,
                'created_at' => now(),

            ],

        ]);
    }
}
