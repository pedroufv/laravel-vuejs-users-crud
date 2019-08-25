<?php

Route::namespace('Api')->group(function () {
    Route::get('/users', 'UsersController@index');
    Route::get('/users/{user}', 'UsersController@show');
    Route::put('/users/{user}', 'UsersController@update');
});
