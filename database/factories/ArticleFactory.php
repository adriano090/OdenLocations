<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
            'name' => $this->faker->lastName,
            'pieceNumber' => $this->faker->swiftBicNumber,
            'photo' => $this->faker->imageUrl(),
            'description' => $this->faker->text,
            'type_article_id' => rand(1,4),
            'isAvailable' => rand(0,1)
        ];
    }
}
