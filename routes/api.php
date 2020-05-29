<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/danh-muc', 'Api\CategoryController@index')->name('danh-muc');
Route::post('/them-danh-muc', 'Api\CategoryController@store')->name('them-danh-muc');

