<?php

use App\Http\Controllers\CompositionTableController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
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
    PageController::class,'home'
])->name('home');

Route::get('/search', [
    PageController::class,'search'
])->name('search');

Route::get('/composition-table/{code}', [
    FoodController::class,'show'
])->name('foods.show');

Route::get('/composition-table', [
    PageController::class,'compositionTable'
])->name('composition.table');


Route::get('/recipe-calculator', [
    PageController::class,'recipeCalculator'
])->name('recipe.calculator');

Route::post('/recipe-calculator', [
    RecipeController::class,'storeWeb'
])->name('recipe.calculator.store');

Route::get('/project-overview', [
    PageController::class,'projectOverview'
])->name('project-overview');

Route::get('/frequently-asked-questions', [
    PageController::class,'faqs'
])->name('faqs');

Route::get('/contact-us', [
    PageController::class,'contactUs'
])->name('contact-us');

Route::post('/contact-us', [
    PageController::class,'sendContactUsForm'
])->name('contact-us.send');

Route::get('/partners', [
    PageController::class,'partners'
])->name('partners');

Route::get('/downloads', [
    PageController::class,'downloads'
])->name('downloads');

Route::get('/news', [
    PageController::class,'news'
])->name('news');

Route::get('/news/{slug}', [
    PageController::class,'newsArticle'
])->name('news.show');

/* Auth Routes */
Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function (){

    Route::get('/', [
        PageController::class,'dashboard'
    ])->name('admin.dashboard');

    Route::group(['prefix'=>'news'], function (){

        Route::get('/', [
            NewsController::class,'index'
        ])->name('admin.news.index');

        Route::get('/create', [
            NewsController::class,'create'
        ])->name('admin.news.create');

        Route::post('/store', [
            NewsController::class,'store'
        ])->name('admin.news.store');

        Route::get('/view/{slug}', [
            NewsController::class,'show'
        ])->name('admin.news.show');

        Route::get('/edit/{slug}', [
            NewsController::class,'edit'
        ])->name('admin.news.edit');

        Route::post('/update/{slug}', [
            NewsController::class,'update'
        ])->name('admin.news.update');

        Route::post('/delete/{slug}', [
            NewsController::class,'delete'
        ])->name('admin.news.delete');
    });

    Route::get('/profile', [
        PageController::class,'profile'
    ])->name('admin.profile');

    Route::get('/page-content', [
        PageController::class,'pageContent'
    ])->name('admin.page-content');

    Route::post('/page-content', [
        PageController::class,'updatePageContent'
    ])->name('admin.page-content.update');

    Route::get('/composition-table', [
        CompositionTableController::class,'index'
    ])->name('admin.composition-table');

    Route::get('/composition-table/create', [
        CompositionTableController::class,'create'
    ])->name('admin.composition-table.create');

    Route::get('/composition-table/view/{code}', [
        CompositionTableController::class,'show'
    ])->name('admin.composition-table.show');

    Route::post('/composition-table/store', [
        CompositionTableController::class,'store'
    ])->name('admin.composition-table.store');

    Route::post('/composition-table/update/{code}', [
        CompositionTableController::class,'update'
    ])->name('admin.composition-table.update');

    Route::post('/user', [
        UserController::class,'store'
    ])->name('user.store');

    Route::post('/user/logout', [
        UserController::class,'logout'
    ])->name('user.logout');
});
