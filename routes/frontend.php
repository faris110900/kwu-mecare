<?php

use Illuminate\Support\Facades\Route;

Route::name('frontend.')->group(function () {
    Route::group([
        // 'middleware'    => ['auth', 'checkRole:Admin'],
        'namespace'     => 'Frontend'
    ], function () {
        Route::get('/', function (){
            return view('welcome');
        });

        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('story', 'StoryController@index')->name('story');
        Route::resource('story', 'StoryController');
    });
});
