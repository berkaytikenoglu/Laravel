<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(GendersTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(FeedbacksCategoryTableSeeder::class);
        $this->call(StatusTableSeeder::class);


        $this->call(UsersTableSeeder::class);
        $this->call(AddressTableSeeder::class);
    }
}
