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

Route::get('/','FrontendController@index')->name('homepage');

Route::get('/mailable', function(){
    $user = App\User::find(1);

    return new App\Mail\UserRegistered($user);
});

Route::middleware('auth')->group(function(){
    Route::get('dashboard', 'User\UsersController@dashboard')->name('dashboard');
    Route::get('logout', 'User\LoginController@logout')->name('logout');

    //Files Route
    Route::get('file/{id}/delete', 'FilesController@delete')->name('delete-file');
});


Route::get('login', 'User\LoginController@form')->name('login');
Route::post('login', 'User\LoginController@login')->name('login-user');
Route::get('register', 'User\RegisterController@form')->name('register');
Route::post('register', 'User\RegisterController@register')->name('register-user');

Route::get('cart', 'CartController@list')->name('cart-list');
Route::post('add-course-to-cart', 'CartController@add')->name('add-to-cart');

Route::get('test/index', 'TestController@getIndex');
Route::get('test/cart', 'TestController@getCart');
