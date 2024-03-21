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

Route::prefix('admin')->group(function () {
    Route::prefix('colleague')->group(function () {
        Route::get('/all', function () {
            $colleagues = Colleague::all();
            return view('admin.all', ['data' => $colleagues, 'title' => 'Cотрудники']);
        })->middleware('auth.basic');
        Route::get('/add', function () {
            return view('admin.colleague.add');
        })->middleware('auth.basic');
        Route::post('/add', function (Request $request) {
            $request->validate([
                'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
            $colleagueData = $request->all();
            $coverImageName = $request->slug . '_cover_' . time() . '.' .$request->cover->getClientOriginalExtension();
            $avatarImageName = $request->slug . '_avatar_' . time() . '.' .$request->avatar->getClientOriginalExtension();

            $request->cover->move(public_path('storage/img/colleague/cover'), $coverImageName);
            $request->avatar->move(public_path('storage/img/colleague/avatar'), $avatarImageName);

            $colleague = new Colleague($colleagueData);
            $colleague->cover = '/storage/img/colleague/cover/' . $coverImageName;
            $colleague->avatar = '/storage/img/colleague/avatar/' . $avatarImageName;

            $colleague->save();

            return redirect('/admin/colleague/all');
        });
    });
    Route::prefix('work')->group(function () {
        Route::get('/all', function () {
            $works = Work::all();
            return view('admin.all', ['data' => $works, 'title' => 'Анонсы']);
        })->middleware('auth.basic');
        Route::get('/add', function () {
            $colleagues = Colleague::all();

            return view('admin.work.add', ['colleagues' => $colleagues]);
        })->middleware('auth.basic');
        Route::post('/add', function (Request $request) {
            $request->validate([
                'workThumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $workData = $request->all();
            $work = new Work();
            $work->workTitle = $workData['workTitle'];
            $work->workCompany = $workData['workCompany'];
            $work->workType = $workData['workType'];

            $thumbnailImageName = $workData['workCompany'] . '_' . $workData['workType'] . '_thumbnail_' . time() . '.' .$request->workThumbnail->getClientOriginalExtension();
            $request->workThumbnail->move(public_path('storage/img/work/thumbnails'), $thumbnailImageName);

            $work->workThumbnail = '/storage/img/work/thumbnails/' . $thumbnailImageName;
            $work->workSizeType = $workData['workSizeType'];
            $work->workTitleColor = $workData['workTitleColor'];

            $work->save();

            foreach ($workData['colleague'] as $colleague) {
                $findedColleague = Colleague::find($colleague);

                $work->colleagues()->attach($findedColleague);
            }

            return redirect('/admin/work/all');
        });
    });
});
