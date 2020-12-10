<?php

use Illuminate\Support\Facades\Route;

Route::name('frontend.')->group(function () {
    Route::group([
        'namespace' => 'Frontend',
    ], function () {

        Route::get('story-home', 'StoryController@home')->name('story-home');
        Route::get('story-read/{story}/', 'StoryController@show')->name('story-read');
        Route::get('langganan', 'LanggananController@index')->name('langganan');
    });
});

Route::name('frontend.')->group(function () {
    Route::group([
        // 'middleware'    => ['auth', 'checkRole:Admin'],
        'namespace'  => 'Frontend',
        'middleware' => ['auth', 'CheckRole:user']
        
    ], function () {
        // Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        //     return view('dashboard');
        // })->name('dashboard');

        // Route::get('/', function () {
        //     return view('welcome');
        // })->name('frontend.welcome');

        Route::get('welcome', 'HomeController@index')->name('welcome');
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        
        //Story Route
        Route::get('story/{stories}/    ', 'StoryController@index')->name('story');
        Route::get('/story/{story}/delete', 'StoryController@destroy')->name('story.delete');
        Route::resource('story', 'StoryController');

        //Cek Keadaan Route
        Route::get('cek-keadaan', 'CekController@index');
    });
});


Route::name('frontend.')->group(function () {
    Route::group([
        'namespace' => 'Frontend',
        'middleware' => ['auth', 'CheckRole:admin']
    ], function () {
        Route::get('/admin', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
        
        Route::get('DashboardAdmin', 'DashboardAdminController@index')->name('admin.dash');

       
    });
});
