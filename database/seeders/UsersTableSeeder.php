<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'name' => 'Admin ...',
                'tc_identity' => '00000000000',
                'firstname' => 'Admin',
                'lastname' => '...',
                'email' => 'admin@admin.com',
                'permission' => '2',
                'password' => Hash::make('12345678'),
                'big_avatar' => 'https://i0.wp.com/www.andersoncollege.com/wp-content/uploads/2023/01/shutterstock_137149802-e1675176612460.jpg?fit=600%2C400&ssl=1',
                'normal_avatar' => 'https://i0.wp.com/www.andersoncollege.com/wp-content/uploads/2023/01/shutterstock_137149802-e1675176612460.jpg?fit=600%2C400&ssl=1',
                'min_avatar' => 'https://i0.wp.com/www.andersoncollege.com/wp-content/uploads/2023/01/shutterstock_137149802-e1675176612460.jpg?fit=600%2C400&ssl=1',
                'created_at' => now(),

            ],

        ]);
    }
}
