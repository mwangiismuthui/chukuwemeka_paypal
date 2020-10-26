<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(OrderStatusDescription::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(CreateAdminUserSeeder::class);
    }
}