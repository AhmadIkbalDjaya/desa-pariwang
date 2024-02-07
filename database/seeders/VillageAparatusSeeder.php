<?php

namespace Database\Seeders;

use App\Models\VillageAparatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VillageAparatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $persons = [
            [
                "name" => "Yusuf Usman",
                "position" => "Kepala Desa",
                "gender" => "male",
            ],
            [
                "name" => "Hairuddin, S.Sos",
                "position" => "Sekretaris Desa",
                "gender" => "male",
            ],
        ];
        foreach ($persons as $person) {
            VillageAparatus::create($person);
        }
    }
}
