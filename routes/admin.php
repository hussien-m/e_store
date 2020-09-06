<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Route::group(['prefix' => "admin" , 'middleware' => 'auth:admin'],function (){

        Route::get('/' , 'AdminController@index');
        Route::get('dashboard' , 'AdminController@index')->name('admin.dashboard');

    });

    Route::group(['prefix' => "admin"],function (){


    });

});
