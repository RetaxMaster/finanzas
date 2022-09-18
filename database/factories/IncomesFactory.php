<?php

namespace Database\Factories;

use App\Models\Incomes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Incomes>
 */
class IncomesFactory extends Factory
{

    protected $model = Incomes::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "payment_methods_id" => rand(1,3),
            "type" => rand(1, 2),
            "date" => $this->faker->date(),
            "amount" => $this->faker->randomFloat(2, 10000, 30000),
            "description" => $this->faker->paragraph(5),
        ];
    }
}
