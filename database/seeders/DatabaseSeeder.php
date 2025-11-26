<?php

namespace Database\Seeders;

use App\Models\Batch;
use App\Models\HomepageMetric;
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

        Batch::create([
            'name' => 'Batch Nasional 2025',
            'period' => 'Januari - Juni 2025',
            'status' => 'Dibuka',
            'registration_url' => 'https://maganghub.kemnaker.go.id',
            'is_featured' => true,
        ]);

        HomepageMetric::insert([
            ['label' => 'Alumni Program', 'value' => '12540', 'order_column' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'Industri Mitra', 'value' => '830', 'order_column' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'Provinsi Terlibat', 'value' => '38', 'order_column' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'Job Placement Rate', 'value' => '72%', 'order_column' => 4, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
