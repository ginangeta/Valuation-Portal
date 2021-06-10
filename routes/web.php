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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@home')->name('home');

// Authentication
Route::get('forgot-password', 'AuthController@forgotPassword')->name('forgot-password');
Route::post('authenticate', 'AuthController@authenticate')->name('authenticate');
Route::post('registration', 'AuthController@registration')->name('registration');
Route::post('password-request', 'AuthController@requestPassword')->name('password.request');
Route::post('change-password', 'AuthController@changePassword')->name('password.change');
Route::post('password-reset', 'AuthController@resetPassword')->name('password.reset');
Route::get('user-pass-reset', 'AuthController@userPassReset')->name('userPassReset');

Route::get('otp', 'AuthController@otp')->name('otp');
Route::post('otpLogin', 'AuthController@otpLogin')->name('otpLogin');
Route::post('validateOTP', 'AuthController@validateOTP')->name('validateOTP');

Route::post('sendMail', 'MailController@sendMail')->name('sendMail');

Route::get('changePasswordPage', 'PagesController@changePasswordPage')->name('changePasswordPage');


Route::get('logout', 'AuthController@logout')->name('logout');


Route::group(['middleware' => ['active']], function () {

    //Pages
    // Route::get('home', 'PagesController@home')->name('home');
    Route::get('details', 'PagesController@details')->name('details');
    Route::get('objections', 'PagesController@objections')->name('objections');
    Route::get('receipt', 'PagesController@receipt')->name('receipt');
    Route::get('usv', 'PagesController@usv')->name('usv');
    Route::get('404', 'PagesController@error')->name('404');

    // Property Details
    Route::get('searchProperty/{searchcriteria}', 'PropertiesController@searchProperty')->name('searchProperty');
    Route::get('usv.singleproperty/{lr_no}', 'PropertiesController@singlePropertyUsv')->name('usv.singleproperty');
    Route::get('objection.singleproperty/{lr_no}', 'PropertiesController@singlePropertyObjection')->name('objection.singleproperty');
    Route::post('createObjections', 'PropertiesController@createObjections')->name('createObjections');
    Route::post('objectNotFound', 'PropertiesController@objectNotFound')->name('objectNotFound');

    // Objections
    Route::post('getReceipt', 'ObjectionController@getReceipt')->name('getReceipt');
    Route::post('sendObjection', 'ObjectionController@sendObjection')->name('sendObjection');
    Route::post('sendNotFoundObjection', 'ObjectionController@sendNotFoundObjection')->name('sendNotFoundObjection');

    //Payment
    Route::get('printReceipt/{billNo}', 'ObjectionController@printReceipt')->name('printReceipt');
    Route::post('checkVerification', 'ObjectionController@checkVerification')->name('checkVerification');
    Route::post('initiate-mpesa-payment', 'ObjectionController@initiateMpesaPayment')->name('initiate-mpesa-payment');

    //Bill
    Route::get('objectionBill/{BillNo}', 'ObjectionController@objectionBill')->name('objectionBill');

    //Client Bills
    Route::get('ClientBills', 'UserController@ClientBills')->name('ClientBills');

    
});



