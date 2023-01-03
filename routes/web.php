<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\ItemsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\CategoriesController;
// use App\Http\Controllers\Web\CategoryController;




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


Route::get('/','App\Http\Controllers\Web\CategoryController@index')->name('index');

    Route::get('/','App\Http\Controllers\Web\CategoryController@index')->name('index');
    Route::get('/items/show/{id}','App\Http\Controllers\Web\ItemsController@show')->name('items-show');

    Route::middleware(['auth'])->group(function () {
        Route::post('/items','App\Http\Controllers\Web\ItemsController@store')->name('items');
        Route::post('/category','App\Http\Controllers\Web\CategoryController@store')->name('store.category');
    });



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

    Route::resource('/categories',CategoriesController::class);
    Route::resource('/items',ItemsController::class);
    Route::resource('/users',UsersController::class);

});
