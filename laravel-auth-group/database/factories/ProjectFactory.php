<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake() -> words(4, true),
            'description' => fake() -> text(350),
            'date' => fake() -> dateTime(),
            'image_url' => fake() -> imageUrl(640, 480, 'project', true),
        ];
    }
}
