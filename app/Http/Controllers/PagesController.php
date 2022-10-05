<?php

namespace App\Http\Controllers;

use App\Classes\FilterResults;
use App\Models\Incomes;
use App\Models\PaymentMethods;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller {

    /**
     * Retorna la vista del index
     *
     * @return Inertia/Inertia
     */
    public function index() {

        $incomes = Incomes::with("payment")->get();

        return Inertia::render("Index", [
            "incomes" => $incomes
        ]);
        
    }

    /**
     * Retorna la lista de gastos por método de pago
     *
     * @return Inertia/Inertia
     */
    public function spents() {
        $results = FilterResults::get_ordered_spents_table();

        return Inertia::render("SpentList", compact("results"));
    }
    
    /**
     * Retorna la vista para hacer previsiones futuras de gastos
     *
     * @return Inertia/Inertia
     */
    public function forecast() {
        $payment_methods = PaymentMethods::with("withdrawals")->get();
        return Inertia::render("Forecast", compact("payment_methods"));
    }

}
