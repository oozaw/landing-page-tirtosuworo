<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Employee::create([
            'name' => "Kepala Desa",
            'position' => "Kepala Desa",
        ]);

        Employee::create([
            'name' => "Wakil Kepala Desa",
            'position' => "Wakil Kepala Desa",
        ]);

        Employee::create([
            'name' => "Sekretaris Desa",
            'position' => "Sekretaris Desa",
        ]);

        Employee::create([
            'name' => "Others Desa",
            'position' => "Others Desa",
        ]);
    }
}