<?php

namespace App\Http\Controllers;

use App\Http\Requests\WithdrawalsRequest;
use App\Models\Withdrawals;
use Illuminate\Http\Request;
use App\Models\PaymentMethods;
use Inertia\Inertia;

class WithdrawalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /* public function index()
    {
        //
    } */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $payment_methods = PaymentMethods::all();
        return Inertia::render("AddWithdrawal", compact("payment_methods"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WithdrawalsRequest $request) {
        
        Withdrawals::create($request->all());

        return response()->json([], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Withdrawals  $withdrawals
     * @return \Illuminate\Http\Response
     */
    /* public function show(Withdrawals $withdrawals)
    {
        //
    } */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Withdrawals  $withdrawals
     * @return \Illuminate\Http\Response
     */
    /* public function edit(Withdrawals $withdrawals)
    {
        //
    } */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Withdrawals  $withdrawals
     * @return \Illuminate\Http\Response
     */
    /* public function update(Request $request, Withdrawals $withdrawals)
    {
        //
    } */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Withdrawals  $withdrawals
     * @return \Illuminate\Http\Response
     */
    /* public function destroy(Withdrawals $withdrawals)
    {
        //
    } */
}
