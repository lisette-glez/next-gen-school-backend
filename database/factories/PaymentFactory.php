<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Enrollment;
use App\Enums\PaymentMethods;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
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
            'payment_date' => fake()->date('Y-m-d'),
            'amount' => fake()->randomFloat(2, 0, 100),
            'payment_method' => fake()->randomElement(PaymentMethods::cases())->value,  
        ];
    }
}
