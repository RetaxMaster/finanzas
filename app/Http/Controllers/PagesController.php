<?php

namespace App\Http\Controllers;

use App\Models\Incomes;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller {

    public function index() {

        $incomes = Incomes::with("payment")->get();

        return Inertia::render("Index", [
            "incomes" => $incomes
        ]);
        
    }

}
