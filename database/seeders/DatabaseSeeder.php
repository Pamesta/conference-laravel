<?php

namespace Database\Seeders;

use App\Models\Conference;
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

        Conference::factory()->create([
            'title' => 'Conference title 1',
            'description' => 'Conference description: a long description for this conferenting conference which describes how the conference conferences. See you soon!',
            'date' => now(),
            'adress' => 'Conference adress, conference st. 12'
        ]);

        Conference::factory()->create([
            'title' => 'Conference title 2',
            'description' => 'yer another long description for this conferenting conference which describes how the conference conferences',
            'date' => now(),
            'adress' => 'Good adress, conference st. 7'
        ]);

        Conference::factory()->create([
            'title' => 'Conference title 3',
            'description' => 'a lovely description describing the conference in which we will conference the conferencing',
            'date' => now(),
            'adress' => 'Evil adress, conference st. 13'
        ]);
    }
}
