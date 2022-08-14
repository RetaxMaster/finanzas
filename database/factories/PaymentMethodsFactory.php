<?php

namespace Database\Factories;

use App\Enums\PaymentMethod;
use App\Models\PaymentMethods;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PaymentMethodsFactory extends Factory
{

    protected $model = PaymentMethods::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type = rand(1, 4);

        $cutoff_date = 
            $type == PaymentMethod::CreditCard->value 
            ? $this->faker->dayOfMonth() 
            : null;

        return [
            "name" => $this->faker->sentence(2),
            "type" => $type,
            "cutoff_date" => $cutoff_date,
            "spend_limit" => 3000,
        ];
    }
}
