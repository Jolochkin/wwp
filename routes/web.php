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

Route::get('/', function () {
    return view('welcome');
});


Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//Route::post('login', 'UserController@login');
//Route::post('logout', 'UserController@logout');
Route::post('verifycode', 'UserController@verifyCode');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('articles', 'ArticleController');
    Route::post('articles/{article_id}/publish', 'ArticleController@publish');
    Route::post('articles/{article_id}/unpublish', 'ArticleController@unpublish');
    Route::post('articles/{article_id}/trash', 'ArticleController@trash');
    Route::post('articles/{article_id}/untrash', 'ArticleController@untrash');
    Route::post('articles/{article_id}/cover', 'UserController@uploadCover');

    Route::post('user/avatar', 'UserController@uploadAvatar');
    Route::post('user/nickname', 'UserController@saveNickname');
});

//Auth::routes();

//Route::get('/home', 'HomeController@index');
