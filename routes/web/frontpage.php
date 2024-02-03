<?php
Route::namespace('App\Http\Controllers\Frontpage')->group(function () {
    Route::name('frontpage.')->group(function () {
        Route::name('home.')->group(function () {
            Route::get('/home', "HomeController@index")->name('index');
            Route::get('/', "LoginController@index")->name('index');
            Route::get('/register', "RegisterController@index")->name('register');

        });

        Route::middleware(['auth'])->group(function () {
            Route::name('home.')->group(function () {
                Route::get('/logout', "LoginController@logout")->name('logout');
            });

        });





    });
});
