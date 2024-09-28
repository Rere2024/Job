<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Auth;
Route::get('/', function () {
    return view('welcome');
});

//public
Route::group([
    'controller' => PublicController::class,
], function () {
    Route::get('index', 'index')->name('index');
    Route::get('about', 'about')->name('about');
    Route::get('category', 'category')->name('category');
    Route::get('contact', 'contact')->name('contact');
    Route::get('jobDetails', 'jobDetails')->name('jobDetails');
    Route::get('jobList', 'jobList')->name('jobList');
    Route::get('testimonial', 'testimonial')->name('testimonial');

});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
