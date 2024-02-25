<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Разбивайте сидеры на отдельные файлы
        $this->call([
            // TestUserSeeder::class,
            // TestRolesSeeder::class,
        ]);
    }
}
