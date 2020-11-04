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

// Auth::routes();

// ログイン関係
Route::get('auth/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('auth/login', 'Auth\LoginController@login');
Route::get('auth/logout', 'Auth\LoginController@logout')->name('logout');

// 新規会員登録関係
Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('auth/register', 'Auth\RegisterController@register');
Route::get('auth/profile', 'Auth\RegisterController@profile')->name('profile');
Route::post('auth/check', 'Auth\RegisterController@check')->name('check');
Route::post('auth/store', 'Auth\RegisterController@store')->name('store');

Route::get('auth/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('auth/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('auth/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('auth/password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// ホーム画面
Route::get('/home', 'HomeController@index')->name('home');

// メイン画面
Route::group(['prefix' => 'main', 'middleware' => 'auth'], function() {
    Route::get('main', 'MainController@main')->name('main.main');
    Route::get('location1', 'MainController@location1')->name('main.location1');
    Route::get('location2', 'MainController@location2')->name('main.location2');
    Route::get('location3', 'MainController@location3')->name('main.location3');
    Route::get('location4', 'MainController@location4')->name('main.location4');
    Route::get('location5', 'MainController@location5')->name('main.location5');
    Route::get('location6', 'MainController@location6')->name('main.location6');
    Route::get('show/{id}', 'MainController@show')->name('main.show');
    Route::post('favorite/{id}', 'MainController@favorite')->name('main.favorite');
    Route::post('unfavorite/{id}', 'MainController@unfavorite')->name('main.unfavorite');
});

// マイページ画面
Route::group(['prefix' => 'my_page', 'middleware' => 'auth'], function() {
    Route::get('my_page', 'MyPageController@my_page')->name('my_page.my_page');
    Route::get('edit', 'MyPageController@edit')->name('my_page.edit');
    Route::post('preview', 'MyPageController@preview')->name('my_page.preview');
    Route::post('update', 'MyPageController@update')->name('my_page.update');
    Route::post('delete/{id}', 'MyPageController@delete')->name('my_page.delete');
});

// チャット
Route::group(['prefix' => 'chat', 'middleware' => 'auth'], function() {
    Route::get('chat/{id}', 'ChatController@chat')->name('chat.chat');
    Route::post('chat_store/{id}', 'ChatController@chatStore')->name('chat.chat_store');
    Route::get('result/{id}', 'ChatController@result')->name('chat.result');
});