<?php

namespace App\Http\Controllers;

use App\Http\Requests\IncomesRequest;
use App\Models\Incomes;
use Illuminate\Http\Request;
use Inertia\Inertia;

class IncomesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /* public function index() {
        
        $incomes = Incomes::with("payment")->get();

        return Inertia::render("IncomesList", [
            "incomes" => $incomes
        ]);

    } */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /* public function create()
    {
        //
    } */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IncomesRequest $request) {

        Incomes::create($request->all());

        return response()->json([], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Incomes  $incomes
     * @return \Illuminate\Http\Response
     */
    /* public function show(Incomes $incomes)
    {
        //
    } */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Incomes  $incomes
     * @return \Illuminate\Http\Response
     */
    /* public function edit(Incomes $incomes)
    {
        //
    } */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Incomes  $incomes
     * @return \Illuminate\Http\Response
     */
    /* public function update(Request $request, Incomes $incomes)
    {
        //
    } */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Incomes  $incomes
     * @return \Illuminate\Http\Response
     */
    /* public function destroy(Incomes $incomes)
    {
        //
    } */
}
