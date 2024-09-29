<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PublicController;
use App\Http\Controllers\Admin\JobController;
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

//admin
//jobs
Route::group(['prefix' => 'admin'], function () {
    Route::group([
        'controller' => JobController::class,
        'prefix' => 'jobs',
        'as' => 'jobs.',

    ], function () {
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('index', 'index')->name('index');
        Route::get('{id}/show', 'show')->name('show');
        Route::get('{id}/edit', 'edit')->name('edit');
        Route::put('{id}/update', 'update')->name('update');
        Route::delete('{id}/delete', 'destroy')->name('delete');
        Route::delete('{id}/restore', 'restore')->name('restore');
    });
});
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
