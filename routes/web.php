<?php

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

Route::get('/', 'GuestUserController@add_guest_user');
Route::post('/saveUser', 'GuestUserController@save_guest_user');
Route::get('/login', 'AdminPublicConroller@login');
Route::post('/auth', 'AdminPublicConroller@auth');
Route::get('/logout', 'AdminPublicConroller@logout');
Route::get('/guestUsers', 'AdminAuthController@guest_user_list');
