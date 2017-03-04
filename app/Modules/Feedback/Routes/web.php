<?php

Route::group(['prefix' => config('cms.uri')], function() {
    Route::resource('feedback', 'Admin\IndexController');

});

Route::post('feedback', 'IndexController@store')->name('feedback.store');
Route::get('feedback/modal', 'IndexController@getModal')->name('feedback.getModal');
