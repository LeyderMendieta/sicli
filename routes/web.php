<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\appController;
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
Route::get('/home', function () {
    return view('home');
});

Route::get("/productos",[appController::class,"verProductosDisponibles"]);
Route::get("/product/{product}",[appController::class,"verProductoDetalle"]);

Route::get('/acercade', function () {
    return view('about');
});

Route::get('/contactanos', function () {
    return view('contact');
});