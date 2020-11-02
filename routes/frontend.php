<?php

use Illuminate\Support\Facades\Route;

Route::name('frontend.')->group(function () {
    Route::group([
        // 'middleware'    => ['auth', 'checkRole:Admin'],
        'namespace'  => 'Frontend',
        'middleware' => ['auth', 'role:user']
        
    ], function () {
        // Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        //     return view('dashboard');
        // })->name('dashboard');

        Route::get('/', function () {
            return view('welcome');
        })->name('frontend.welcome');

        Route::get('welcome', 'HomeController@index')->name('welcome');
        Route::get('story', 'StoryController@index')->name('story');
        Route::get('/story/{story}/delete', 'StoryController@destroy')->name('story.delete');
        Route::resource('story', 'StoryController');
    });
});


Route::name('frontend.')->group(function () {
    Route::group([
        'namespace' => 'Frontend',
        'middleware' => ['auth', 'role:admin']
    ], function () {
        Route::get('/', function () {
            return view('frontend.dashboard');
        })->name('frontend.dashboard');

        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    });
});
