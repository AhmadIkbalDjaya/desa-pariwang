<?php

namespace Database\Seeders;

use App\Models\VillageStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VillageStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = ["Desa Mandiri", "Desa Maju", "Desa Berkembang", "Desa Tertinggal", "Desa Sangat Tertiggal"];
        foreach ($statuses as $status) {
            VillageStatus::create([
                "name" => $status,
            ]);
        }
    }
}
