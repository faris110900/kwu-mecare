<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.welcome2');
// });
Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');

Auth::routes();
// Route::redirect('/admin', '/admin/dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

require('frontend.php');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
