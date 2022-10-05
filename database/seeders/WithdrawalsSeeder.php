<?php

namespace Database\Seeders;

use App\Models\Withdrawals;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WithdrawalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=0; $i < 12; $i++) { 

            $date = new DateTime("2022-" . $i . "-" . rand(1, 28));

            Withdrawals::factory(5)->create([
                "payment_methods_id" => rand(1,3),
                "type" => rand(1, 2),
                "date" => $date->format("Y-m-d"),
            ]);

        }
    }
}
