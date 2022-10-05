<?php

namespace App\Classes;

use App\Models\PaymentMethods;
use App\Models\Withdrawals;
use DateTime;

class FilterResults {

    protected static $meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

    /**
     * Retorna los gastos por métodode pago ordenados por meses
     *
     * @return array
     */
    public static function get_ordered_spents_table(): array {

        $ordered_array = [];

        $payment_methods = PaymentMethods::select([
            "id", "name"
        ])->get();

        foreach ($payment_methods as $payment_method) {

            $months = [];

            for ($i=1; $i <= 12; $i++) {

                $spents = Withdrawals::whereMonth("date", "=", $i)
                            ->where("payment_methods_id", "=", $payment_method->id)
                            ->get()->toArray();

                array_push($months, array(
                    "month_name" => self::$meses_ES[$i - 1],
                    "spents" => $spents
                ));
                
            }

            array_push($ordered_array, array(
                "name" => $payment_method->name,
                "months" => $months
            ));
            
        }

        return $ordered_array;
        
    }

    /**
     * Retorna los gastos por métodode pago ordenados por meses
     *
     * @return array
     */
    public static function get_ordered_spents_table_alternate(): array {

        $ordered_array = [];

        $payment_methods = PaymentMethods::select([
            "id", "name"
        ])->with("withdrawals")->get();

        foreach ($payment_methods as $payment_method) {

            $withdrawals = $payment_method->withdrawals->toArray();
            $months = [];

            for ($i=1; $i <= 12; $i++) { 
                
                $spents = array_filter($withdrawals, function($current) use ($i) {
                    $date = new DateTime($current["date"]);
                    return $date->format("m") == $i;
                });

                array_push($months, array(
                    "month_name" => self::$meses_ES[$i - 1],
                    "spents" => $spents
                ));

            }

            array_push($ordered_array, array(
                "name" => $payment_method->name,
                "months" => $months
            ));
            
        }

        return $ordered_array;
        
    }

}
