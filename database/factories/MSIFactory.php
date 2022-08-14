<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MSI>
 */
class MSIFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "payment_methods_id" => rand(1,3),
            "months" => rand(12, 18),
            "paid_months" => rand(1, 12),
            "init_date" => $this->faker->date(),
            "paid" => false,
        ];
    }
}
