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
                'candeleteuser' =>  false,
                'canuploaduseravatar' => false,

                'canresponserequest' =>  false,
                'canresponserequestlist' => json_encode([
                    1 => false,
                    2 => false,
                    3 => false,
                    4 => false,
                    5 => false,
                    6 => false,
                ]),
                'canaddfeedbackcategory' => false,
                'candeletefeedbackcategory' => false,
                'canreportrequest' => false,

                'caneditmyprofile' => false,
                'candeletemyprofile' =>  false,
                'canuploaduseravatarmyprofile' => false,

                'created_at' => now(),
            ],
            [
                'name' => 'Müdür',
                'category' => 'Bilgi İşlem',

                'canshowadminpanel' => true,

                'canedituser' =>  true,
                'candeleteuser' =>  true,
                'canuploaduseravatar' => true,

                'canresponserequest' =>  true,
                'canresponserequestlist' => json_encode([
                    1 => true,
                    2 => true,
                    3 => true,
                    4 => true,
                    5 => true,
                    6 => true,
                ]),
                'canaddfeedbackcategory' => true,
                'candeletefeedbackcategory' => true,
                'canreportrequest' => true,

                'caneditmyprofile' => true,
                'candeletemyprofile' =>  true,
                'canuploaduseravatarmyprofile' => true,

                'created_at' => now(),

            ],
            [
                'name' => 'Personel',
                'category' => 'Bilgi İşlem',

                'canshowadminpanel' => false,

                'canedituser' =>  false,
                'candeleteuser' =>  false,
                'canuploaduseravatar' => false,

                'canresponserequest' =>  false,
                'canresponserequestlist' => json_encode([
                    1 => true,
                    2 => true,
                    3 => true,
                    4 => true,
                    5 => true,
                    6 => true,
                ]),
                'canaddfeedbackcategory' => false,
                'candeletefeedbackcategory' => false,
                'canreportrequest' => false,

                'caneditmyprofile' => false,
                'candeletemyprofile' =>  false,
                'canuploaduseravatarmyprofile' => false,

                'created_at' => now(),

            ],
            [
                'name' => 'Vergi',
                'category' => 'Personel',

                'canshowadminpanel' => false,

                'canedituser' =>  false,
                'candeleteuser' =>  false,
                'canuploaduseravatar' => false,

                'canresponserequest' =>  false,
                'canresponserequestlist' => json_encode([
                    1 => true,
                    2 => true,
                    3 => true,
                    4 => true,
                    5 => true,
                    6 => true,
                ]),
                'canaddfeedbackcategory' => false,
                'candeletefeedbackcategory' => false,
                'canreportrequest' => false,

                'caneditmyprofile' => false,
                'candeletemyprofile' =>  false,
                'canuploaduseravatarmyprofile' => false,

                'created_at' => now(),

            ],
            [
                'name' => 'Tapu',
                'category' => 'Personel',

                'canshowadminpanel' => false,

                'canedituser' =>  false,
                'candeleteuser' =>  false,
                'canuploaduseravatar' => false,

                'canresponserequest' =>  false,
                'canresponserequestlist' => json_encode([
                    1 => true,
                    2 => true,
                    3 => true,
                    4 => true,
                    5 => true,
                    6 => true,
                ]),
                'canaddfeedbackcategory' => false,
                'candeletefeedbackcategory' => false,
                'canreportrequest' => false,

                'caneditmyprofile' => false,
                'candeletemyprofile' =>  false,
                'canuploaduseravatarmyprofile' => false,

                'created_at' => now(),

            ],
            [
                'name' => 'Zabıta',
                'category' => 'Personel',

                'canshowadminpanel' => false,

                'canedituser' =>  false,
                'candeleteuser' =>  false,
                'canuploaduseravatar' => false,

                'canresponserequest' =>  false,
                'canresponserequestlist' => json_encode([
                    1 => true,
                    2 => true,
                    3 => true,
                    4 => true,
                    5 => true,
                    6 => true,
                ]),
                'canaddfeedbackcategory' => false,
                'candeletefeedbackcategory' => false,
                'canreportrequest' => false,

                'caneditmyprofile' => false,
                'candeletemyprofile' =>  false,
                'canuploaduseravatarmyprofile' => false,

                'created_at' => now(),

            ],

        ]);
    }
}
