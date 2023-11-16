<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('admin')->name('admin.')->group(function (){
    Route::view('/welcome', 'welcome');

    Route::middleware('is_admin')->group(function (){
        Route::view('/welcome', 'welcome')->name('welcome');

        Route::view('dashboard', 'dashboard')->name('dashboard');
        Route::view('profile', 'profile')->name('profile');
    });
    require __DIR__.'/admin_auth.php';
});



