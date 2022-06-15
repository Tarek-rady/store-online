<?php

namespace Database\Seeders;
use Database\Factories\CatigoryFactory;
use Database\Factories\ProductFactory;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        // \App\Models\User::factory(10)->create();
            // \App\Models\Catigory::factory(6)->create();
            // \App\Models\Product::factory(22)->create();

            $this->call(SettingSeeder::class);


    }
}
