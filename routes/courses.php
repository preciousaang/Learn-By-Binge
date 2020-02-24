<?php


Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'CoursesController@index')->name('courses');
    Route::get('create', 'CoursesController@create')->name('create-course');
    Route::post('create', 'CoursesController@store')->name('store-course');
});
