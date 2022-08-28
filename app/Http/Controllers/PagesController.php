<?php

namespace App\Http\Controllers;

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
     * Retorna el formulario para añadir un ingreso
     *
     * @return Inertia/Inertia
     */
    public function add_income() {
        $payment_methods = PaymentMethods::all();
        return Inertia::render("AddIncome", compact("payment_methods"));
    }



}
