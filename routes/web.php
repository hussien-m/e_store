<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Route::get('/', function () {
        return view('welcome');
    });


    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');


    Route::prefix('admin')->group(function(){
        Route::get('login'  ,  'AdminAuth\LoginController@showLoginForm')->name('admin.login');
        Route::post('login' ,  'AdminAuth\LoginController@login')->name('admin.login.submit');
        Route::get('logout' ,  'AdminAuth\LoginController@logout')->name('admin.logout');
    });

});
