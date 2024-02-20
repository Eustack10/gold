<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ColorsController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\GemController;
use App\Http\Controllers\GoldController;
use App\Http\Controllers\GoldSmithController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProductTypesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    // Route::get('/', function () {
    //     return view('index');
    // })->name('index');
    Route::get('/', [IndexController::class, 'jellewery'])->name('index');
    Route::get('/jellewery', [IndexController::class, 'jelleweryCreate'])->name('jellewery.create');
    Route::get('/{id}/weight', [IndexController::class, 'weight'])->name('weight');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


    Route::resource('gem', GemController::class)->names('admin.gem');
    Route::resource('gold', GoldController::class)->names('admin.gold');
    Route::resource('categories', CategoriesController::class)->names('admin.categories');
    Route::resource('product_types', ProductTypesController::class)->names('admin.product_types');
    Route::resource('color', ColorsController::class)->names('admin.color');
    Route::resource('brands', BrandsController::class)->names('admin.brands');
    Route::resource('goldsmith', GoldSmithController::class)->names('admin.goldsmith');
    Route::resource('location', LocationController::class)->names('admin.location');
    Route::resource('counter', CounterController::class)->names('admin.counter');
   
});


// Route::fallback( function(){
//     return redirect()->route('loginView');
// });
Route::get('/login', [AuthController::class, 'loginView'])->name('loginView');
Route::post('/login', [AuthController::class, 'login'])->name('login');