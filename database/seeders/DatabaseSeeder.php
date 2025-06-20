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
        // User::factory(10)->create();

        User::create([
            'name' => 'harunyahya',
            'email' => 'haryah@example.com',
            'password' => bcrypt('harunyhy1'),
            'roll' => 'user'
        ]);
        User::create([
            'name' => 'mahyadi',
            'email' => 'mahyadi@example.com',
            'password' => bcrypt('mahyadi12'),
            'roll' => 'user'
        ]);
        User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin123'),
            'roll' => 'admin'
        ]);
        User::create([
            'name' => 'hanif',
            'email' => 'hanif@example.com',
            'password' => bcrypt('hanif123'),
            'roll' => 'user'
        ]);
        User::create([
            'name' => 'nurul',
            'email' => 'nurul@example.com',
            'password' => bcrypt('nurul123'),
            'roll' => 'user'
        ]);
        User::create([
            'name' => 'yahya',
            'email' => 'yahya@example.com',
            'password' => bcrypt('yahya123'),
            'roll' => 'user'
        ]);
        User::create([
            'name' => 'mutia',
            'email' => 'mutia@example.com',
            'password' => bcrypt('mutia123'),
            'roll' => 'user'
        ]);
    }
}
