<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

Route::name('auth.')->group(function () {
    Route::group([
       'namespace' => 'Auth'
    ], function (){
        
        //Verifikasi Auth Route
        Route::get('verif', 'VerificationController@index')->middleware('verified')->name('verify');

        //Profile Route
        Route::resource('profile', 'ProfileController');
    });
});


Route::name('frontend.')->group(function () {
    Route::group([
        'namespace' => 'Frontend',
    ], function () {

        Route::get('story-home', 'StoryController@home')->name('story-home');
        Route::get('story-read/{story}/', 'StoryController@show')->name('story-read');
        Route::get('langganan', 'LanggananController@index')->name('langganan');
        Route::get('konseling', 'DoctorController@index')->name('konseling');
        Route::get('meditasi-home', 'MeditasiController@home')->name('meditasi-home');
        Route::get('pixel-home', 'PixelController@home')->name('pixel-home');
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
        Route::get('welcome', 'HomeController@index')->name('welcome');
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        
        //Story Route
        Route::get('story/{stories}/    ', 'StoryController@index')->name('story');
        Route::get('/story/{story}/delete', 'StoryController@destroy')->name('story.delete');
        Route::resource('story', 'StoryController');
        
        //React Route
        // Route::get('react', 'ReactController@store')->name('react.store');
        Route::resource('react', 'ReactController');
        
        //Cek Keadaan Route
        // Route::get('cek-keadaan', 'CekController@index');

        //Meditasi Route
        Route::resource('meditasi', 'MeditasiController');

        //Pixel Route
        Route::resource('pixel', 'PixelController');
        Route::get('pixel-cek', 'PixelController@create')->name('pixel.cek');
        Route::get('pixel-react', 'PixelController@pixelCreate')->name('pixel.react');
        Route::post('pixel-reaction', 'PixelController@pixelStore')->name('pixel.reaction');

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
        
        //Emosi Route Admin
        Route::resource('emosi', 'EmosiController');
        Route::get('emosi/{emosi}/delete', 'EmosiController@destroy')->name('emosi.delete');

        //Faktor Route Admin
        Route::resource('faktor', 'FaktorController');
        Route::get('faktor/{faktor}/delete', 'FaktorController@destroy')->name('faktor.delete');

       
    });
});
