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


Route::get('sign-in', 'SignInController@showSignInPage')->name('user.show.sign-in');
Route::post('signing-in', 'SignInController@signingIn')->name('user.signing-in');
Route::get('sign-up', 'SignUpController@showSignUpPage')->name('user.show.sign-up');
Route::post('signing-up', 'SignUpController@signingUp')->name('user.signing-up');
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
Route::middleware('auth:web')->group(function() {
    Route::post('logout', 'SignOutController@Logout')->name('user.logout');
});
