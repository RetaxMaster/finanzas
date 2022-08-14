<?php

namespace Database\Seeders;

use App\Enums\PaymentMethod;
use App\Models\PaymentMethods;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentMethodsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        PaymentMethods::factory()->create([
            "name" => "Cuenta de banco",
            "type" => PaymentMethod::BankAccount->value,
            "cutoff_date" => null
        ]);
        
        PaymentMethods::factory()->create([
            "name" => "Tarjeta Banamex",
            "type" => PaymentMethod::CreditCard->value,
            "cutoff_date" => fake()->dayOfMonth()
        ]);

        PaymentMethods::factory()->create([
            "name" => "Tarjeta HSBC",
            "type" => PaymentMethod::CreditCard->value,
            "cutoff_date" => fake()->dayOfMonth()
        ]);

    }
}
