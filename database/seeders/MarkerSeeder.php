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
                "name" => "Lapangan",
                "description" => "Lapangan Sepak Bola Desa Pariwang",
                "longitude" => "119.8295304629999",
                "latitude" => "-3.672330042457889",
            ],
            [
                "name" => "Sekolah Dasar (SD)",
                "description" => "Sekolah Dasar Desa Pariwang",
                "longitude" => "119.83122879125847",
                "latitude" => "-3.6742039289841375",
            ],
            [
                "name" => "Masjid AL-MA'ARIF",
                "description" => "Masjid Desa Pariwang ",
                "longitude" => "119.83052236407364",
                "latitude" => "-3.6716762026246523",
            ],
            [
                "name" => "Kantor Desa",
                "description" => "Kantor Desa Pariwang",
                "longitude" => "119.82997963523773",
                "latitude" => "-3.67259066864969",
            ],
        ];

        foreach ($markers as $marker) {
            Marker::create($marker);
        }
    }
}
