<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    public const TAGS = ['Government', 'Crime', 'Politics', 'Weather', 'Disaster', 
        'Health', 'Parenting', 'Shoping', 'Food', 'Travel', 'Cars',
        'Celebrity', 'Music', 'Movies', 'TV', 
        'Markets', 'Crypto', 'Industries', 'Energy', 'Science',
        'Football', 'Basketball', 'Handball', 'Waterpolo', 'Tennis'];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement(self::TAGS)
        ];
    }
}