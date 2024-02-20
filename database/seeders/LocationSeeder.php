<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::create([
            "longitude" => "119.83000797006216",
            "latitude" => "-3.670752842865715",
            "province" => "Sulawesi Selatan",
            "regency" => "Enrekang",
            "district" => "Maiwa",
            "border_east" => "Desa Kaluppang",
            "border_west" => "Desa Karrang",
            "border_south" => "Desa Batu Mila",
            "border_north" => "Desa Palakka/Limbuang",
            "area" => "10.330.000",
        ]);
    }
}
