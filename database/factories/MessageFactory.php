<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        return [
            'sender' => $this->faker->name(),
            'email' => $this->faker->email(),
            'subject' => $this->faker->sentence(mt_rand(3, 7)),
            'body' => collect($this->faker->paragraphs(mt_rand(15, 30)))->map(fn ($p) => "<p>$p</p>")->implode("")
        ];
    }
}