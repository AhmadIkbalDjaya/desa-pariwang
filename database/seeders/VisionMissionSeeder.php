<?php

namespace Database\Seeders;

use App\Models\VisionMission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisionMissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam sapiente amet debitis cumque a, nihil odio aspernatur explicabo cum aliquid consequuntur consectetur minus eaque saepe?",
                "is_visi" => true,
            ],
            [
                "content" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum laudantium esse consequatur aliquid, quasi quae!",
            ],
            [
                "content" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum laudantium esse consequatur aliquid, quasi quae!",
            ],
            [
                "content" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum laudantium esse consequatur aliquid, quasi quae!",
            ],
        ];

        foreach ($datas as $data) {
            VisionMission::create($data);
        }
    }
}
