<?php
Route::namespace('Student')->group(function(){

    //Login and Logout
    Route::get('login', 'LoginController@form')->name('student-login');
    Route::post('login', 'LoginController@login')->name('login-student');
    Route::get('logout', 'LoginController@logout')->name('student-logout');


    //Registration
    Route::get('register', 'RegisterController@form')->name('student-register');
    Route::post('register', 'RegisterController@register')->name('register-student');

    //Dashboard
    Route::get('dashboard', 'DashboardController@index')->name('student-dashboard');
});

