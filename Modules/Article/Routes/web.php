<?php

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

use Illuminate\Support\Facades\Route;
use Modules\Article\Http\Controllers\ArticleController;


Route::post('test1', function () {
    dd(json_decode(request()->article));

})->name('test-save');
Route::prefix('user/article')->group(function() {
    Route::get('create-new-article', 'ArticleController@showCreateForm')->name('user.show.create.article.form');

    Route::post('upload-test', function () {
        return response()->json([
            'success' => 1,
            'file' => [
                "url" => "https://www.tesla.com/tesla_theme/assets/img/_vehicle_redesign/roadster_and_semi/roadster/hero.jpg",
            ],
        ]);
    });
    Route::post('fetchUrl', function () {
        return response()->json([
            'success' => 1,
            'file' => [
                "url" => "https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/5eeea355389655.59822ff824b72.gif",
            ],
        ]);
    });

});

Route::post('get-image', [ArticleController::class, 'getData'])->name('user.test');
