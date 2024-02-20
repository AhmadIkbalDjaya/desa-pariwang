<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profile = [
            "name" => "Pariwang",
            // "address" => "Enrekang",
            "description" => "Desa Pariwang adalah sebuah desa yang terletak di Kabupaten Enrekang, Selawesi Selatan. Desa ini berada di Kecamatan Maiwa. Pariwang memiliki potensi yang menarik, terutama karena keindahan alamnya yang masih alami. Di sini, kita dapat menikmati pemandangan pegunungan, lembah hijau, serta keunikan budaya lokal. Desa Pariwang memiliki jumlah populasi sekitar beberapa ribu penduduk, yang mayoritas menggantungkan hidup dari sektor pertanian dan peternakan.",
            "potency" => "Gula Merah, Kayu, Langsat dll",
            "population" => "275",
            "contact" => "081241250245",
            "email" => "ikbaldjaya@gmail.com",
            // "longitude" => "-3.670752842865715",
            // "latitude" => "119.83000797006216",
            // "video_link" => "-----",
            "village_status_id" => "1",
        ];

        Profile::create($profile);
    }
}
