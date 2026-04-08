<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\categories;
use App\Models\products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // Create or update a test user
        User::updateOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => bcrypt('password'),
                'role' => 'user',
            ]
        );

        // Create admin user (if not exists) using provided data
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin',
                'password' => bcrypt('123'),
                'role' => 'admin',
            ]
        );

        // Seed some categories and products for demo
        $cat1 = categories::updateOrCreate(['name' => 'Electronics']);
        $cat2 = categories::updateOrCreate(['name' => 'Books']);

        $p1 = products::updateOrCreate(['name' => 'Smartphone'], ['price' => 1500000]);
        $p2 = products::updateOrCreate(['name' => 'Novel Book'], ['price' => 75000]);

        $p1->categories()->sync([$cat1->id]);
        $p2->categories()->sync([$cat2->id]);
    }
}
