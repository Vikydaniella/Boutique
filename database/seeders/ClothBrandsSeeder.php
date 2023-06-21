<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClothBrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ClothBrands::factory(5)->create();
    }
}
