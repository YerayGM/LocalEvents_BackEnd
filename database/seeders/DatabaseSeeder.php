<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            AttributeSeeder::class,
            AssociationSeeder::class,
            PostSeeder::class,
            InscribeSeeder::class,
            EventSeeder::class,
            CommentSeeder::class,
            AsisteSeeder::class,
        ]);
    }
}
