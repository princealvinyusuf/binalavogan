<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::factory()->create([
            'name' => 'Admin BINALAVOGAN',
            'email' => 'admin@binalavogan.local',
            'is_admin' => true,
            'password' => bcrypt('admin1234'),
        ]);

        User::factory()->count(3)->create();
    }
}
