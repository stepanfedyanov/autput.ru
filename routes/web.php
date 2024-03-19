<?php

use App\Models\Colleague;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
require __DIR__ . '/../util/send_to.php';
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
Route::prefix('api')->group(function() {
    Route::post('/form', function(Request $request) {
        $jsonData = $request->json()->all();
        $name = isset($jsonData['name']) ? $jsonData['name'] : '';
        $email = isset($jsonData['email']) ? $jsonData['email'] : '';
        $phone = isset($jsonData['phone']) ? $jsonData['phone'] : '';
        $message_to_send = "Со страницы autput.ru поступило сообщение. Данные клиента: \n $name \n $email \n $phone \n";
        message_to_telegram($message_to_send);
    });
});