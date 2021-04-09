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

// Route::get('/users/{id}/{name}', function ($id, $name) {
//     return 'This is user' .$id' whose name is ' .$name;
// });

// Route::get('/home', function () {
//     return view('app');
// });

Route::get('/', 'PagesController@home')->name('home');

//Pages
Route::get('home', 'PagesController@home')->name('home');
Route::get('details', 'PagesController@details')->name('details');
Route::get('objections', 'PagesController@objections')->name('objections');
Route::get('receipt', 'PagesController@receipt')->name('receipt');
Route::get('usv', 'PagesController@usv')->name('usv');
Route::get('404', 'PagesController@error')->name('404');

// Authentication
Route::get('forgot-password', 'AuthController@forgotPassword')->name('forgot-password');
Route::post('authenticate', 'AuthController@authenticate')->name('authenticate');
Route::post('registration', 'AuthController@registration')->name('registration');
Route::post('password-request', 'AuthController@requestPassword')->name('password.request');
Route::get('change-password', 'AuthController@changePassword')->name('password.change');
Route::post('password-reset', 'AuthController@resetPassword')->name('password.reset');

Route::get('logout', 'AuthController@logout')->name('logout');

// Property Details
Route::get('searchProperty', 'PropertiesController@searchProperty')->name('searchProperty');
Route::get('usv.singleproperty/{lr_no}', 'PropertiesController@singlePropertyUsv')->name('usv.singleproperty');
Route::get('objection.singleproperty/{lr_no}', 'PropertiesController@singlePropertyObjection')->name('objection.singleproperty');
Route::post('createObjections', 'PropertiesController@createObjections')->name('createObjections');

// Objections
Route::post('getReceipt', 'ObjectionController@getReceipt')->name('getReceipt');
Route::post('sendObjection', 'ObjectionController@sendObjection')->name('sendObjection');

//Bill
Route::get('objectionBill/{BillNo}', 'ObjectionController@objectionBill')->name('objectionBill');




