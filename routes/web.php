<?php

use Illuminate\Support\Facades\Route;

// DASHBOARD - LOGIN ROUTE 
Route::get('login', 'LoginController@login');
Route::get('register', 'LoginController@register');
Route::post('register', 'LoginController@postregister');
Route::post('login', 'LoginController@postlogin');
