<?php

namespace Database\Factories;

use App\Models\Withdrawals;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Withdrawals>
 */
class WithdrawalsFactory extends Factory
{

    protected $model = Withdrawals::class;

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
            "date" => $this->faker->dateTime(),
            "amount" => $this->faker->randomFloat(2, 100, 1000),
            "description" => $this->faker->paragraph(5),
        ];
    }
}
