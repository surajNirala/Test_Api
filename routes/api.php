<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


	Route::group( [ 'prefix' => 'v1' ], function(){
		//----------------- Admin/Subadmin -----------
    Route::post('register', 'version1\UserController@register');
    Route::post('login', 'version1\UserController@login');

    });

    Route::group(['prefix' => 'v1', 'middleware' => 'jwt-auth'], function ()
     {

    	// ------------  Guest Routes by Suraj    ---

        /*Route::get('guests', 'version1\GuestController@index');
        Route::get('guests/get-all', 'version1\GuestController@get_all');
        Route::get('guests/{guest}', 'version1\GuestController@show');
        Route::post('guests', 'version1\GuestController@store');
		Route::put('guests/{guest}', 'version1\GuestController@update');
		Route::delete('guests/{guest}', 'version1\GuestController@destroy');*/

        Route::apiResource('guests','version1\GuestController');
       // Route::get('guests/get-all', 'version1\GuestController@get_all');

		// ----------- Key_logs Routes by Suraj -----------------

		/*Route::get('key-logs', 'version1\Key_logController@index');
		Route::get('key-logs/get-all', 'version1\Key_logController@get_all');
        Route::get('key-logs/{key_logs}', 'version1\Key_logController@show');
        Route::post('key-logs', 'version1\Key_logController@store');
		Route::put('key-logs/{key_logs}', 'version1\Key_logController@update');
		Route::delete('key-logs/{key_logs}', 'version1\Key_logController@destroy');*/
        Route::apiResource('key-logs','version1\Key_logController');
       // Route::get('key-logs/get-all', 'version1\Key_logController@get_all');
    });


/*Route::get('v1/guests', 'version1\GuestController@index');
Route::get('v1/guests/get-all', 'version1\GuestController@get_all');
Route::get('v1/guests/{guest}', 'version1\GuestController@show');
Route::post('v1/guests', 'version1\GuestController@store');
Route::put('v1/guests/{id}', 'version1\GuestController@update');
Route::delete('v1/guests/{id}', 'version1\GuestController@delete');

Route::group(['prefix'=>'v1/guests'],function(){

Route::get('/{guest}/key_logs','version1\Key_logController@index');*/