<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\NewsController;
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

Route::get('/composition-table/{code}', [
    FoodController::class,'show'
])->name('foods.show');

Route::get('/composition-table', [
    AppController::class,'compositionTable'
])->name('composition.table');


Route::get('/recipe-calculator', [
    AppController::class,'recipeCalculator'
])->name('recipe.calculator');

Route::get('/project-overview', [
    AppController::class,'projectOverview'
])->name('project-overview');

Route::get('/frequently-asked-questions', [
    AppController::class,'faqs'
])->name('faqs');

Route::get('/contact-us', [
    AppController::class,'contactUs'
])->name('contact-us');

Route::get('/news', [
    NewsController::class,'index'
])->name('news');

Route::get('/news/{slug}', [
    NewsController::class,'show'
])->name('news.show');


