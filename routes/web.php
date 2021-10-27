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

//Route Home
Route::get('/', 'HomeController@index');
Route::get('/travel', 'HomeController@Detailtravel');
Route::get('/join', 'HomeController@join');
Route::get('/login', 'HomeController@login');
Route::post('/proses_login', 'HomeController@prosesLogin');
Route::get('/registrasi', 'HomeController@register');
Route::post('/proses_register', 'HomeController@prosesRegister');
Route::get('/keluar', 'HomeController@logout');

//Route for admin
Route::get('/admin', 'AdminController@index');
Route::get('/admin/travel', 'TravelController@index');
Route::get('/admin/add_travel', 'TravelController@create');
Route::post('/admin/add_travel', 'TravelController@store');
Route::get('/admin/travel/detail/{id}', 'TravelController@detail');
Route::get('/admin/travel/update/{id}', 'TravelController@edit');
Route::post('/admin/travel/update/{id}', 'TravelController@update');
Route::get('/admin/travel/delete/{id}', 'TravelController@destroy');
Route::get('/admin/gallery', 'GalleryController@index');
Route::get('/admin/add_gallery', 'GalleryController@create');
Route::post('/admin/add_gallery', 'GalleryController@store');
Route::get('/admin/transaksi', 'TransactionController@index');
Route::get('/admin/transaction/detail/{id}', 'TransactionController@show');
Route::get('/admin/transaction/update/{id}', 'TransactionController@edit');
Route::post('/admin/transaction/update/{id}', 'TransactionController@update');
Route::get('/admin/transaction/delete/{id}', 'TransactionController@destroy');

// Route for user
Route::get('/home', 'UserHomeController@index');
Route::get('/detail', 'UserController@detail');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
