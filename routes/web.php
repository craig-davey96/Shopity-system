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

/**
 * ---------------------------------- DASHBOARD ----------------------------------
 */

Route::get('/' , 'DashboardController@index');
Route::get('/dashboard' , 'DashboardController@index');

/**
 * ---------------------------------- ORDERS ----------------------------------
 */

Route::get('/orders' , 'OrdersController@index');
Route::get('/orders/order/{id}' , 'OrdersController@profile');
Route::get('/orders/create' , 'OrdersController@create');

/**
 * ---------------------------------- SEARCH ----------------------------------
 */


Route::post('/search/products' , 'SearchController@productSearch');