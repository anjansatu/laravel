<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::query()->create([
            'username' => 'demo',
            'email' => 'demo@example.com',
            'phone' => '01700000000',
            'password' => Hash::make('Password123'),
        ]);

        $this->call(AdminSeeder::class);
    }
}
