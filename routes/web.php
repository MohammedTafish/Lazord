<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('lazord.index');
// });


Route::view('parent' , 'lazord.parent');
Route::view('temp' , 'lazord.temp');
Route::view('/' , 'lazord.learn')->name("learn");
Route::view('pricing' , 'lazord.pricing')->name("pricing");
Route::view('solutions' , 'lazord.solutions')->name("solutions");
Route::view('lab-services' , 'lazord.lab-services')->name("lab-services");
Route::view('why-lazord' , 'lazord.why-lazord')->name("why-lazord");



Route::post('/register' , [RegisterController::class , 'store'])->name('register');

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect()->route('login');
})->name('logout');

Route::view('/home' , 'lazord.index')->name("home")->middleware('auth'); 

Route::get('/login' , [LoginController::class , 'show_login'])->name('login')->middleware('guest');
Route::post('/login' , [LoginController::class , 'loginUser']);