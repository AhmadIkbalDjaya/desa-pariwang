<?php

namespace Database\Seeders;

use App\Models\Population;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PopulationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $population = [
            "total_population" => 516,
            "male" => 265,
            "female" => 251,
            "family" => 120,
            "temporary" => 0,
            "mutation" => 100,
        ];
        Population::create($population);
    }
}
