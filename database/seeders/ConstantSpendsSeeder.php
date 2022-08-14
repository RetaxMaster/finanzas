<?php

namespace Database\Seeders;

use App\Enums\PaymentMethod;
use App\Models\ConstantSpends;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConstantSpendsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        ConstantSpends::factory()->create([
            "payment_methods_id" => 1,
            "name" => "Pago de renta",
            "initial_date" => "2021-04-12",
            "deactivation_date" => null,
            "status" => true,
        ]);

        ConstantSpends::factory()->create([
            "payment_methods_id" => 2,
            "name" => "Pago de internet",
            "initial_date" => "2021-04-12",
            "deactivation_date" => null,
            "status" => true,
        ]);

        ConstantSpends::factory()->create([
            "payment_methods_id" => 3,
            "name" => "Pago de luz",
            "initial_date" => "2021-04-12",
            "deactivation_date" => null,
            "status" => true,
        ]);

        ConstantSpends::factory()->create([
            "payment_methods_id" => 2,
            "name" => "Pago de agua",
            "initial_date" => "2021-04-12",
            "deactivation_date" => null,
            "status" => true,
        ]);

    }
}
