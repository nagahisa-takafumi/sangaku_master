<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
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

Route::get('/', function () {
    return Redirect::to('/home');
});

Auth::routes();

Route::group(["middleware" => "auth"], function(){ 
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::group(['prefix' => 'sake_type', 'as' => 'sake_type.'], function (){
        Route::get('', [\App\Http\Controllers\SakeTypeController::class, 'list'])->name('list');
        Route::get('create', [\App\Http\Controllers\SakeTypeController::class, 'goCreate'])->name('goCreate');
        Route::post('create', [\App\Http\Controllers\SakeTypeController::class, 'create'])->name('create');
    });

    Route::group(['prefix' => 'sake', 'as' => 'sake.'], function (){
        Route::get('', [\App\Http\Controllers\SakeController::class, 'list'])->name('list');
        Route::get('create', [\App\Http\Controllers\SakeController::class, 'goCreate'])->name('goCreate');
        Route::post('create', [\App\Http\Controllers\SakeController::class, 'create'])->name('create');
    });

    Route::group(['prefix' => 'camp', 'as' => 'camp.'], function (){
        Route::get('', [\App\Http\Controllers\CampController::class, 'list'])->name('list');
        Route::get('create', [\App\Http\Controllers\CampController::class, 'goCreate'])->name('goCreate');
        Route::post('create', [\App\Http\Controllers\CampController::class, 'create'])->name('create');
    });

    Route::group(['prefix' => 'place', 'as' => 'place.'], function (){
        Route::get('', [\App\Http\Controllers\PlaceController::class, 'list'])->name('list');
        Route::get('create', [\App\Http\Controllers\PlaceController::class, 'goCreate'])->name('goCreate');
        Route::post('create', [\App\Http\Controllers\PlaceController::class, 'create'])->name('create');
    });

    Route::group(['prefix' => 'brewery', 'as' => 'brewery.'], function (){
        Route::get('', [\App\Http\Controllers\BreweryController::class, 'list'])->name('list');
        Route::get('create', [\App\Http\Controllers\BreweryController::class, 'goCreate'])->name('goCreate');
        Route::post('create', [\App\Http\Controllers\BreweryController::class, 'create'])->name('create');
    });
});