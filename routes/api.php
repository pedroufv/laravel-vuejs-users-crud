<?php

Route::namespace('Api')->group(function () {
    Route::get('/users', 'UsersController@index');
    Route::post('/users', 'UsersController@store');
    Route::get('/users/{user}', 'UsersController@show');
    Route::put('/users/{user}', 'UsersController@update');
    Route::delete('/users/{user}', 'UsersController@destroy');
});
