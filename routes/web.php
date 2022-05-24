<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\Location\DivisionController;
use App\Http\Controllers\Backend\Vot\VotController;
use App\Http\Controllers\Frontend\CategoryNewsController;
use App\Http\Controllers\FrontEnd\CategorywisenewsController;
use App\Http\Controllers\FrontEnd\HomepageController;
use App\Http\Controllers\Frontend\LocationwisenewsController;
use App\Http\Controllers\Frontend\SearchController;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\FrontEnd\SinglepostController;
use App\Http\Controllers\Frontend\SubCategorywiseController;

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

Route::get('/',[HomepageController::class,'homepage'])->name('homepage');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/news/{id}',[SinglepostController::class,'singlenews'])->name('singlenews');
Route::get('/category/{id}',[CategorywisenewsController::class,'categoryNews'])->name('category.news');

Route::get('/subcategory/{id}',[SubCategorywiseController::class,'subcategoryNews'])->name('subcategory.news');

Route::get('/locationnews',[LocationwisenewsController::class,'locationWisenews'])->name('location.news');


Route::get('search', [SearchController::class, 'search'])->name('search.page');


