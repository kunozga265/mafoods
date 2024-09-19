<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(['prefix' => 'users'], function () {
    Route::post("/login", [UserController::class, 'login']);

    Route::post("/register", [UserController::class, 'register']);

    Route::post('/update', [
        "uses" => "App\Http\Controllers\API\V1_0\UserController@update",
        'roles' => ['administrator']
    ])->middleware('auth:sanctum');

    Route::post("/update/password", [
        UserController::class, 'updatePassword'
    ])->middleware('auth:sanctum');
});

Route::post('foods/seeder',[\App\Http\Controllers\FoodController::class,'seeder']);
Route::post('foodtypes/seeder',[\App\Http\Controllers\FoodTypeController::class,'seeder']);
Route::post('retention-factors/seeder',[\App\Http\Controllers\RetentionFactorController::class,'seeder']);
Route::post('/image-upload', [AppController::class, 'uploadImage']);
Route::post('/file-upload', [AppController::class, 'uploadFile']);
Route::post('/recipe/generate', [RecipeController::class, 'generatePDF']);
Route::get("/groups", [\App\Http\Controllers\GroupController::class,"index"]);
Route::get("/fetch-data", [\App\Http\Controllers\API\AppController::class,"index"]);
Route::get("/foods", [\App\Http\Controllers\FoodController::class,"index"]);
Route::get("/food-types", [\App\Http\Controllers\FoodTypeController::class,"index"]);
Route::get("/retention-factors", [\App\Http\Controllers\RetentionFactorController::class,"index"]);
//Route::post("/recipes", [\App\Http\Controllers\RecipeController::class,"store"]);
Route::post("/recipes", [\App\Http\Controllers\RecipeController::class,"storeWeb"])->middleware('auth:sanctum');
Route::get('/recipes/print/{id}', [RecipeController::class, 'printRecipe']);
Route::get('/about-us', [App\Http\Controllers\API\AppController::class, 'aboutUs']);

Route::post('descriptors/seeder',[\App\Http\Controllers\DescriptorController::class,'seeder']);

