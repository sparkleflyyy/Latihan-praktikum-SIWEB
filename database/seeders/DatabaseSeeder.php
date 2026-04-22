<?php

namespace Database\Seeders;

use App\Models\User;
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

        User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
            'name' => 'Admin',
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            ]
        );
    }
}
