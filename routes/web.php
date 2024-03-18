<?php

use App\Models\Colleague;
use App\Models\Work;
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
    $works = Work::all();
    return view('home', compact('works'));
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
Route::get('/{slug}', function($slug) {
    $colleague = Colleague::find($slug);
    if (!$colleague)
    {
        abort(404, 'Oops! Page Not Found.');
    }
    $works = $colleague->works;
    return view('colleague', compact('colleague', 'works'));
});