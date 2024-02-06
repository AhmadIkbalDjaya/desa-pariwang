<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    static $counter = 1;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $imageNumber = self::$counter;
        self::$counter++;
        return [
            "title" => fake()->sentence(5),
            "body" => fake()->paragraph(),
            "image" => "article/article-$imageNumber.jpg",
            "publish_date" => fake()->dateTimeBetween("-1 years", Carbon::now()->addDays(90)),
        ];
    }
}
