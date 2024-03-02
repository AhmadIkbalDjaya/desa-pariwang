<?php

namespace Database\Seeders;

use App\Models\InstitutionMember;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstitutionMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $members = [
            [
                "name" => "Herman. K",
                "position" => "Ketua BPD",
                "institution_id" => 1,
                "gender" => "male",
            ],
            [
                "name" => "Yuliati, SKM",
                "position" => "Kepala Puskesmas",
                "institution_id" => 2,
                "gender" => "female",
            ],
            [
                "name" => "Husnah, AMK",
                "position" => "Penanggung Jawab Jariangan Pelayanan Puskesmas Dan Jejaring",
                "institution_id" => 2,
                "gender" => "female",
            ],
            [
                "name" => "Kartini,AMD.KEB",
                "position" => "Penanggung Jawab Dusun",
                "institution_id" => 2,
                "gender" => "female",
            ],
            [
                "name" => "Hanisu,AMD.KEB",
                "position" => "Penanggung Jawab Dusun",
                "institution_id" => 2,
                "gender" => "female",
            ],
            [
                "name" => "Kartini,AMD.KEB",
                "position" => "Kartini Jawab Dusun",
                "institution_id" => 2,
                "gender" => "female",
            ],
        ];

        foreach ($members as $member) {
            InstitutionMember::create($member);
        }
    }
}
