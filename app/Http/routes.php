<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Supplier;
use App\User;
use App\InstagramAccount;
Route::get('/', function () {
    return view('user.index');
});

Route::get('/panel', function () {
    return view('dashboard.main');
});

Route::get('/supplierRegister', function () {
    return view('dashboard.supplierRegister');
});

Route::get('/customerRegister', function () {
    return view('dashboard.customerRegister');
});


Route::get('register','AuthenticationController@showRegister');
Route::group(['prefix' => 'register'], function()
{
    Route::get('/','AuthenticationController@showRegister');

    Route::get('supplierviainstagram', 'AuthenticationController@registersupplierviainstagram');
    Route::get('supplier','AuthenticationController@showSupplierRegister');
    Route::post('store/supplier','User\SupplierController@store');

});
Route::any('instagramcallback','AuthenticationController@instagramCallback');
