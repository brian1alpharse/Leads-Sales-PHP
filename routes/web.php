<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadsController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/leads/create', [LeadsController::class, 'create'])->name('leads.create');
Route::post('/leads', [LeadsController::class, 'store'])->name('leads.store');
Route::get('/leads', [LeadsController::class, 'index'])->name('leads.index');