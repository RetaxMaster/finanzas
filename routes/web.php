<?php

use App\Http\Controllers\IncomesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\WithdrawalsController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
}); */

Route::get("/", [PagesController::class, "index"])
    ->name("index");

Route::get("/spents", [PagesController::class, "spents"])
    ->name("spents");

Route::get("/forecast", [PagesController::class, "forecast"])
    ->name("forecast");

Route::resource("incomes", IncomesController::class)
    ->except(["show", "index", "edit", "update", "destroy"]);

Route::resource("withdrawals", WithdrawalsController::class)
    ->except(["show", "index", "edit", "update", "destroy"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
