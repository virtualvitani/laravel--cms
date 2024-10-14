<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->catchPhrase();

        return [
            'title' => $title,
            'image' => fake()->imageUrl(),
            'slug' => Str::slug($title),
            'body' => fake()->paragraphs(mt_rand(3, 10), true),
            'category_id' => Category::factory(),
            'user_id' => User::factory(),
        ];
    }
}