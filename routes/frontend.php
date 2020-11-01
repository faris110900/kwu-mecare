<?php

use Illuminate\Support\Facades\Route;

Route::name('frontend.')->group(function () {
    Route::group([
        // 'middleware'    => ['auth', 'checkRole:Admin'],
        'namespace'     => 'Frontend'
    ], function () {
        Route::get('/', function (){
            return view('frontend.dashboard');
        });

        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('story', 'StoryController@index')->name('story');
        Route::get('/story/{story}/delete', 'StoryController@destroy')->name('story.delete');
        Route::resource('story', 'StoryController');
    });
});
