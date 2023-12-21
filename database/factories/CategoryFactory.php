<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $title = fake()->realText(10);
        return [

            'name' => $this->faker->unique()->randomElement(['Sport', 'News', 'Science', 'Web Development', 'UI/UX']),
            'slug' => $this->faker->slug(3),
            'created_at' => fake()->dateTime

            // 'name' => $this->faker->name(),
            // 'slug' => $this->faker->slug(3),
            // 'created_at' => fake()->dateTime
        ];
    }
}
