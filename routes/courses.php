<?php


Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'CoursesController@index')->name('courses');
    Route::get('create', 'CoursesController@create')->name('create-course');
    Route::post('create', 'CoursesController@store')->name('store-course');
    Route::get('{id}/edit', 'CoursesController@edit')->name('edit-course');
    Route::post('{id}/edit', 'CoursesController@update')->name('update-course');
    Route::get('{id}/files', 'FilesController@list')->name('tutor-course-files');
    Route::get('{id}/add-file', 'FilesController@create')->name('create-course-file');
    Route::post('{id}/add-file', 'FilesController@store')->name('store-course-file');
});
