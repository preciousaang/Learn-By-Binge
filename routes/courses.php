<?php

Route::get('/', function(){
    return 'This works';
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('create', 'CoursesController@create')->name('create-course');
    Route::post('create', 'CoursesController@store')->name('store-course');
});
