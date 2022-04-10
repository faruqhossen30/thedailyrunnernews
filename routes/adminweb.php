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

//---------------------DASHBOARD----------------------------
Route::get('admin/dashboard',[DashboardController::class,'index']);
// ---------------------LOCATION-----------------------------
Route::resource('admin/division', DivisionController::class);
Route::resource('admin/district', DistrictController::class);
Route::resource('admin/upazila', UpazilaController::class);
Route::get('upazila-from-district/{id}', [LoactionAjaxController::class, 'upazilaFromDistrict'])->name('upazilaFromDistrict');
Route::get('district-from-division/{id}', [LoactionAjaxController::class, 'districtFromDivision'])->name('districtFromDivision');

Route::get('admin/setting', [SiteController::class, 'index'])->name('admin.setting.index');
Route::get('admin/setting/create', [SiteController::class, 'create'])->name('admin.setting.create');
Route::post('admin/setting', [SiteController::class, 'store'])->name('admin.setting.store');


Route::resource('admin/news', NewsController::class);
Route::resource('admin/category',CategoryController::class);
Route::resource('admin/tags',TagsController::class);




