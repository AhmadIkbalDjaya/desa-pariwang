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
            "address" => "Enrekang",
            "potency" => "-",
            "population" => "275",
            "contact" => "081241250245",
            "longitude" => "-3.670752842865715",
            "latitude" => "119.83000797006216",
            "video_link" => "-----",
            "village_status_id" => "1",
        ];

        Profile::create($profile);
    }
}
