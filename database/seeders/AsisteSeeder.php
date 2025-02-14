<?php

namespace Database\Seeders;

use App\Models\Asiste;
use Illuminate\Database\Seeder;

class AsisteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Asiste::factory()->count(20)->create();
    }
}
