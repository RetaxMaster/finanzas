<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ConstantSpends>
 */
class ConstantSpendsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $deactivation_date =
            rand(0, 1) == 1
            ? $this->faker->date(
                max: date("2023-12-31")
            )
            : null;

        return [
            "payment_methods_id" => rand(1,3),
            "name" => $this->faker->sentence(2),
            "initial_date" => $this->faker->date(),
            "deactivation_date" => $deactivation_date,
            "status" => $deactivation_date == null,
        ];
    }
}
