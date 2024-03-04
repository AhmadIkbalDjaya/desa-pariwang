<?php

namespace Database\Seeders;

use App\Models\Marker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $markers = [
            [
                "name" => "Lapangan Sepak Bola",
                "description" => "Lapangan Sepak Bola Desa Pariwang",
                "longitude" => "119.8295304629999",
                "latitude" => "-3.672330042457889",
            ],
            [
                "name" => "SD Negeri Pariwang",
                "description" => "Sekolah Dasar Desa Pariwang",
                "longitude" => "119.83122879125847",
                "latitude" => "-3.6742039289841375",
            ],
        ];

        foreach ($markers as $marker) {
            Marker::create($marker);
        }
    }
}
