<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use App\Models\Bumdes;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            "username" => "adminpariwang",
            "password" => "pariwang789",
        ]);
        User::create([
            "username" => "admin",
            "password" => "admin456",
        ]);
        $this->call(VillageStatusSeeder::class);
        Bumdes::factory(6)->create();
        $this->call(InstitutionSeeder::class);
        $this->call(VillageAparatusSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(HamletSeeder::class);
        $this->call(ArticleSeeder::class);
        Article::factory(10)->create();
        $this->call(PopulationSeeder::class);
        $this->call(InstitutionMemberSeeder::class);
        $this->call(MarkerSeeder::class);
        $this->call(VisionMissionSeeder::class);
    }
}
