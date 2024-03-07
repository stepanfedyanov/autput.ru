<?php

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
Route::get('/', function() {
    return view('home');
});
Route::prefix('work')->group(function () {
    Route::prefix('24mkk')->group(function() {
        Route::get('/site', function () {
            return view('work.24mkk.site');
        });
        Route::get('/logo', function () {
            return view('work.24mkk.logo');
        });
    });
    Route::prefix('skyfort')->group(function() {
        Route::get('/site', function() {
            return view('work.skyfort.site');
        });
    });
    Route::prefix('siberia-power')->group(function() {
        Route::get('/site', function() {
            return view('work.siberia-power.site');
        });
    });
});