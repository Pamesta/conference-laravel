<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'test testonio',
            'username' => 'test',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
        ]);

        User::factory()->create([
            'name' => 'admin adminos',
            'username' => 'admin',
            'is_admin' => 1,
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}
