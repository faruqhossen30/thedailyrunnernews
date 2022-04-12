<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\Location\DistrictController;
use App\Http\Controllers\Backend\Location\DivisionController;
use App\Http\Controllers\Backend\Location\UpazilaController;
use App\Http\Controllers\Backend\Location\LoactionAjaxController;
use App\Http\Controllers\Admin\Setting\SettingController;
use App\Http\Controllers\Backend\Blog\Post\CategoryController;
use App\Http\Controllers\Backend\Blog\Post\NewsController;
use App\Http\Controllers\Backend\Blog\Post\TagsController;
use App\Http\Controllers\Backend\Dashboard\DashboardController as DashboardDashboardController;
use App\Http\Controllers\Backend\Roles\RolesController;
use App\Http\Controllers\Backend\Setting\SiteController;


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



Route::group(['prefix' => 'admin'], function () {
    //---------------------DASHBOARD----------------------------
    // Route::get('dashboard', [DashboardController::class, 'index']);
    Route::get('dashboard',[DashboardDashboardController::class,'index'])->name('admin.dashboard');
    Route::resource('roles',RolesController::class ,['name'=>'admin']);
    // ---------------------LOCATION-----------------------------
    Route::resource('division', DivisionController::class);
    Route::resource('district', DistrictController::class);
    Route::resource('upazila', UpazilaController::class);
    Route::get('upazila-from-district/{id}', [LoactionAjaxController::class, 'upazilaFromDistrict'])->name('upazilaFromDistrict');
    Route::get('district-from-division/{id}', [LoactionAjaxController::class, 'districtFromDivision'])->name('districtFromDivision');

    Route::get('setting', [SiteController::class, 'index'])->name('admin.setting.index');
    Route::get('setting/create', [SiteController::class, 'create'])->name('admin.setting.create');
    Route::post('setting', [SiteController::class, 'store'])->name('admin.setting.store');


    Route::resource('news', NewsController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('tags', TagsController::class);
});
