

<?php

use Illuminate\Support\Facades\Route;

Route::namespace ('staff')->prefix('staff')->group(function () {

    Route::get('/', [App\Http\Controllers\Staff\HomeController::class, 'index'])->name('staff.home');

    Route::namespace ('Auth')->group(function () {
        // Authentication Routes
        Route::get('/login', [App\Http\Controllers\Staff\Auth\LoginController::class,'showLoginForm'])->name('staff.login');
        Route::post('/login', [App\Http\Controllers\Staff\Auth\LoginController::class,'login']);
        Route::post('logout',[App\Http\Controllers\Staff\Auth\LoginController::class,'logout'])->name('staff.logout');
        // Registration Routes
        //Route::get('register', 'RegisterController@showRegistrationForm')->name('staff.register');
        //Route::post('register', 'RegisterController@register');
    });

});