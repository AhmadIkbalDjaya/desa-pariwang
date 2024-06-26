<?php

namespace Database\Seeders;

use App\Models\Institution;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $institutions = [
            [
                "name" => "Badan Permusyawaran Desa",
                "abbreviation" => "BPD",
            ],
            [
                "name" => "Pustu",
            ],
            [
                "name" => "Karang Taruna",
            ],
            [
                "name" => "Pemberdayaan dan Kesejahteraan Keluarga",
                "abbreviation" => "PKK",
            ],
        ];
        foreach ($institutions as $institution) {
            Institution::create($institution);
        }
    }
}
