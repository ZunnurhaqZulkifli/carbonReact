<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tasks>
 */
class TasksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userIds = User::pluck('id');
        
        return [
            'user_id' => $userIds->random(),
            'name' => $this->faker->text . 'tasks',
            'description' => $this->faker->sentence,
            'created_at' => $this->faker->dateTimeThisMonth,
        ];
    }
}
