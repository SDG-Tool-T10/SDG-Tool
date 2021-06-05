<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'program_id' => $this->faker->numberBetween(1, 3),
            'business_operation_id' => $this->faker->numberBetween(1, 7),
            'research_group_id' => NULL,
            'activity_id' => $this->faker->numberBetween(1, 8),
            'title' => $this->faker->sentence,
            'description' => $this->faker->catchPhrase,
            'impact' => $this->faker->text,
            'link' => $this->faker->url,
            'contact_name'=> $this->faker->name,
            'contact_email' => $this->faker->unique()->safeEmail,
            'visibility' => $this->faker->numberBetween(0, 1),
            'created_at' => now()
        ];
    }
}
