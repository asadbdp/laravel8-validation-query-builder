<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\PhoneSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\StudentSeeder;
use Database\Seeders\MaterialSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            StudentSeeder::class,
            PhoneSeeder::class,
            RoleSeeder::class,
            MaterialSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
