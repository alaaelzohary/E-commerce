<?php

namespace Database\Seeders;

use Prophecy\Call\Call;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->Call([
           RoleSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
