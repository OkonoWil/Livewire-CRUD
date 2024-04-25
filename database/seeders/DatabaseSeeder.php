<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->hasTodos(5)->create();

        User::factory()->hasTodos(10)->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'Test1234'
        ]);
    }
}
