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
            "description" => "Desa Pariwang adalah sebuah desa yang terletak di Kabupaten Enrekang, Selawesi Selatan. Desa ini berada di Kecamatan Maiwa. Pariwang memiliki potensi yang menarik, terutama karena keindahan alamnya yang masih alami. Di sini, kita dapat menikmati pemandangan pegunungan, lembah hijau, serta keunikan budaya lokal. Desa Pariwang memiliki jumlah populasi sekitar beberapa ribu penduduk, yang mayoritas menggantungkan hidup dari sektor pertanian dan peternakan.",
            "potency" => "Gula Merah, Kayu, Langsat dll",
            "contact" => "081241250245",
            "email" => "desa.pariwang01@gmail.com",
            "village_status_id" => "1",
            "vision" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam sapiente amet debitis cumque a, nihil odio aspernatur explicabo cum aliquid consequuntur consectetur minus eaque saepe?",
            "mission" => "1. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum laudantium esse consequatur aliquid, quasi quae!
2. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum laudantium esse consequatur aliquid, quasi quae!
3. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum laudantium esse consequatur aliquid, quasi quae!",
        ];

        Profile::create($profile);
    }
}
