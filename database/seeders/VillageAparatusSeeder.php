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
            [
                "name" => "Kamisa, S.Pd",
                "position" => "Kasi Pemerintahan",
                "gender" => "male",
            ],
            [
                "name" => "Rusman, A.Md",
                "position" => "Kasi Kesejahteraan",
                "gender" => "male",
            ],
            [
                "name" => "Mahmuddin",
                "position" => "Kasi Pelayanan",
                "gender" => "male",
            ],
            [
                "name" => "Jusria Kasman, S.Ap",
                "position" => "Kaur Keuangan",
                "gender" => "female",
            ],
            [
                "name" => "Kaur Perencanaan",
                "position" => "Kaur Perencaan",
                "gender" => "female",
            ],
            [
                "name" => "Nawar",
                "position" => "Kadus Ketapi",
                "gender" => "male",
            ],
            [
                "name" => "ABD Jalil, SP",
                "position" => "Kadus Pariwang",
                "gender" => "male",
            ],
            [
                "name" => "Yusuf",
                "position" => "Kadus Bampu",
                "gender" => "male",
            ],
        ];
        foreach ($persons as $person) {
            VillageAparatus::create($person);
        }
    }
}
