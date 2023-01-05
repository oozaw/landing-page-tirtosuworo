<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Umkm;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call([
            EmployeeSeeder::class,
            MessageSeeder::class,
            NewsSeeder::class,
            UMKMSeeder::class
        ]);
    }
}