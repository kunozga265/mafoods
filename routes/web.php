<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [
    AppController::class,'home'
])->name('home');

Route::get('/search', [
    AppController::class,'search'
])->name('search');

Route::get('/foods/{code}', [
    FoodController::class,'show'
])->name('foods.show');



Route::get('/composition-table', [
    AppController::class,'compositionTable'
])->name('composition.table');


