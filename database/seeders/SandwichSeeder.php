<?php

namespace Database\Seeders;

use App\Models\Sandwich;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SandwichSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sandwich::factory(5)->create();
    }
}
