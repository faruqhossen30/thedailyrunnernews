<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\Location\DivisionController;
use App\Http\Controllers\Frontend\CategoryNewsController;
use App\Http\Controllers\FrontEnd\HomepageController;
use App\Http\Controllers\Frontend\SingleNewsController;
use App\Http\Controllers\Frontend\SinglePage\SinglePageController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/news/{id}',[SingleNewsController::class,'singlenews'])->name('singlenews');
Route::get('/category/{id}',[CategoryNewsController::class,'categoryNews'])->name('category.news');
