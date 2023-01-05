<?php

namespace Database\Seeders;

use App\Models\Umkm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UMKMSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Umkm::factory(5)->create();
    }
}