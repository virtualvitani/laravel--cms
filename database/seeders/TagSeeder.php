<?php

namespace Database\Seeders;

use App\Models\Tag;
use Database\Factories\TagFactory;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (TagFactory::TAGS as $tag) {
            Tag::factory()->create([
                'name' => $tag,
            ]);
        }
    }
}