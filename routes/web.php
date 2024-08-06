<?php

use App\Http\Controllers\CareerFormController;
use App\Http\Controllers\QuoteFormController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });
Route::view("/","index");
Route::view("/get-a-quote","get-a-quote");
Route::post('/get-a-quote',QuoteFormController::class);
Route::post('/career',CareerFormController::class);
