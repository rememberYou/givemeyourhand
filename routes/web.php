<?php

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

// Authentification Routes
Auth::routes();

// Global Routes
Route::resource('home', 'HomeController');
Route::resource('offers', 'OfferController');
Route::resource('permissions', 'PermissionController');
Route::resource('portraits', 'PortraitController');
Route::resource('privacy', 'PrivacyController');
Route::resource('purchase', 'PurchaseController');
Route::resource('roles', 'RoleController');
Route::resource('services', 'ServiceController');
Route::resource('statistics', 'StatisticController');
Route::resource('terms', 'TermController');
Route::resource('users', 'UserController');

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::post('contact', 'HomeController@postContact');
