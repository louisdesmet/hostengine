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

/*TODO limit all resource controllers to the methods they need*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');
Route::post('/logout/{id}', 'AuthController@logout');

//Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::post('reset-password', 'AuthController@sendPasswordResetLink');
Route::post('reset/password', 'AuthController@callResetPassword');


Route::group(['middleware' => ['auth:api']], function () {
    Route::get('/products/esd', 'ProductController@esd');
    Route::apiResource('products', 'ProductController');
    Route::get('/users/{id}/domains', 'UserController@domains');
    Route::get('/users/{id}/products', 'UserController@products');
    Route::get('/users/{id}/orders', 'UserController@orders');
    Route::get('/users/{id}/invoices', 'UserController@invoices');
    Route::get('/users/{id}/contacts', 'UserController@invoices');
    Route::apiResource('users', 'UserController');
    Route::get('/product-keys/panel', 'ProductKeyController@panel');
    Route::apiResource('product-keys', 'ProductKeyController');
    Route::apiResource('categories', 'CategoryController');
    Route::apiResource('vendors', 'VendorController');
    Route::apiResource('languages', 'LanguageController');
    Route::apiResource('orders', 'OrderController');
    Route::apiResource('domains', 'DomainController');

    Route::get('/office/availability/{tenant}', 'ProductController@officeTenantAvailability');
    Route::get('/office/find/{tenant}', 'ProductController@findTenant');
});




Route::get('/test', 'ProductKeyController@synchronize');
Route::get('/test2', 'UserController@synchronize');
Route::get('/test2b', 'UserController@synchronize2');
Route::get('/test2c', 'UserController@synchronize3');

Route::get('/test4', 'OrderController@synchronize');
Route::get('/test7', 'OrderController@synchronizeDomains');
Route::get('/test8', 'OrderController@synchronizeOffice365');
Route::get('/test9', 'OrderController@synchronizeOffice365Details');

Route::post('/test5', 'OrderController@report');
Route::post('/test6', 'OrderController@excel');

Route::get('/test300', function() {
});
