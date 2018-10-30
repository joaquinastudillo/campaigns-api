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
    $role = $request->user()->roles()->get();
    return $role[0]->permissions;
});

//logging out the user and deleting the token
Route::middleware('auth:api')->post('/logout', 'AuthController@logout');

//obtaining the token to get access
Route::post('/login', 'AuthController@login');

// general routes
Route::resource('campaigns', 'CampaignController');
Route::resource('stores', 'StoreController');
Route::resource('products', 'ProductController');

//specifics routes for stores and products related to one campaign

//for campaign-stores
Route::get('campaigns/{campaign}/stores', 'CampaignStoreController@index');
Route::post('campaigns/stores/new', 'CampaignStoreController@store');
Route::post('campaigns/stores/delete/{id}', 'CampaignStoreController@destroy');
Route::get('campaigns/{campaign}/stores/{store}', 'CampaignStoreController@show');

//for campaign-products
Route::get('campaigns/{campaign}/products', 'CampaignProductController@index');
Route::post('campaigns/products/new', 'CampaignProductController@store');
Route::post('campaigns/products/delete/{id}', 'CampaignProductController@destroy');
Route::get('campaigns/{campaign}/products/{product}', 'CampaignProductController@show');
