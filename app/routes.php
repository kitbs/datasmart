<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::any('validate.{format}/{against}/{input}/{second?}/{third?}/{fourth?}', 'DatasmartController@doValidate');

Route::get('barcode/{against}/{size}/{input}.{format}', 'DatasmartController@doBarcode');
Route::get('barcode/{against}/{input}.{format}', 'DatasmartController@doBarcodeNoSize');


Route::post('barcode/{against}.{format}', 'DatasmartController@doBarcodePost');

// Route::any('format/{against}/{input}/{second?}/{third?}/{fourth?}', 'ValidateController@doFormat');
