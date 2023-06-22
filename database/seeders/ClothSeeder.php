<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClothSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Cloth::factory(5)->create();
    }
}
