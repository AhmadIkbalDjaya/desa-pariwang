<?php

namespace Database\Seeders;

use App\Models\Hamlet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HamletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hamlets = [
            [
                "name" => "Bampu",
                "chief" => "Yusuf",
            ],
            [
                "name" => "Ketapi",
                "chief" => "Nawar",
            ],
            [
                "name" => "Pariwang",
                "chief" => "Abdul Jalil",
            ],
        ];
        foreach ($hamlets as $hamlet) {
            Hamlet::create($hamlet);
        }
    }
}
