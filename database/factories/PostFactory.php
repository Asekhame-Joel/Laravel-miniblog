<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            
//the about automatically creates a default user_id and category id to the post whenever the post is created
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'thumbnail' => $this->faker->image(),
            'excerpts' => '<p>'. implode('</p><p>', $this->faker->paragraphs(2)) . '</p>',
            'body' => '<p>'. implode('</p><p>', $this->faker->paragraphs(7)) . '</p>',
        ];
    }
}
