<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

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
    return view('welcome');
});
Route::get('/list', [PizzaController::class, 'index']);
Route::get('/order/{name}', [PizzaController::class, 'show']);
Route::get('/pizza', [PizzaController::class, 'index']);
Route::get('/pizza/create', [PizzaController::class, 'create'])->middleware('auth');
Route::post('/pizza', [PizzaController::class, 'store']);
Route::delete('/pizza/{id}', [PizzaController::class, 'destroy']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
