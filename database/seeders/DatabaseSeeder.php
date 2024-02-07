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
            "username" => "admin",
            "password" => "admin123",
        ]);
        $this->call(VillageStatusSeeder::class);
        Bumdes::factory(30)->create();
        $this->call(InstitutionSeeder::class);
        Article::factory(15)->create();
        $this->call(VillageAparatusSeeder::class);
    }
}
