<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Enrollment;
use App\Models\Module;
use App\Models\Lesson;
use App\Enums\ProgressStatus;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Progress>
 */
class ProgressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'enrollment_id' => Enrollment::factory(),
            'module_id' => Module::factory(),
            'lesson_id' => Lesson::factory(),
            'completion_date' => fake()->date('Y-m-d'),
            'completion_status' => fake()->randomElement(ProgressStatus::cases())->value,    
        ];
    }
}
