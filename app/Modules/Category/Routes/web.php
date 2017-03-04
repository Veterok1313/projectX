<?php

    Route::group(['prefix' => config('cms.uri')], function() {
        Route::resource('category', 'Admin\IndexController');
        Route::put('category/priority/{id}/{direction}', 'Admin\IndexController@priority')->name('admin.category.priority');
        Route::delete('category/delete-upload/{id}/{field}', 'Admin\IndexController@deleteUpload')->name('admin.category.delete-upload');
    });

    Route::get('category/{id}','IndexController@index')->name('category.index');

