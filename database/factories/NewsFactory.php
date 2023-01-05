<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        return [
            "title" => $this->faker->sentence(mt_rand(3, 7)),
            "slug" => $this->faker->unique()->slug(),
            "body" => collect($this->faker->paragraphs(mt_rand(15, 30)))->map(fn ($p) => "<p>$p</p>")->implode(""),
            "excerpt" => $this->faker->paragraphs(2, true),
        ];
    }
}