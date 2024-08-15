<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Testing\Fakes\Fake;
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
        $title=fake()->title;
        return [
            'title'=>$title,
            'slug_name'=>Str::slug($title),
            'is_active'=>fake()->boolean(),
            'category_id'=>random_int(1,10),
            'body'=>fake()->paragraph(),
        ];
    }
}
