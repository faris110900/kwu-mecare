<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Mail\UserRegisteredMail;

Route::get('/email', function () {
    return new UserRegisteredMail();
});
// Route::get('/email', 'RegisteredUserController');
Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');
Auth::routes(['verify' => true]);
// Route::redirect('/admin', '/admin/dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

require('frontend.php');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
