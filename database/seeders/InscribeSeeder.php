<?php

namespace Database\Seeders;

use App\Models\Inscribe;
use Illuminate\Database\Seeder;

class InscribeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Inscribe::factory()->count(5)->create();
    }
}
