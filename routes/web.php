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

Route::get('/','WebsiteController@index');
Route::get('/products', 'WebsiteController@allProducts');
Route::get('/stores', 'WebsiteController@allStores');
Route::get('/products/page/{no}', 'WebsiteController@allProductsPage');
Route::get('/stores/page/{no}', 'WebsiteController@allStoresPage');

Route::get('/products/category/{id}', 'WebsiteController@allProductsByCategory');
Route::get('/products/category/{id}/page/{no}', 'WebsiteController@allProductsByCategoryPage');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/addTocart/{id}', 'CartController@addTocart');
Route::get('/removecart/{id}', 'CartController@removecart');
Route::get('/increase/{id}', 'CartController@increase');
Route::get('/decrease/{id}', 'CartController@decrease');
Route::get('/cart', 'CartController@index');

Route::get('/sellerpanel','StorePanelController@index');

Route::get('/sellerpanel/products_table','StorePanelController@products_table');
Route::get('/sellerpanel/products/{id}/delete','ProductController@delete');
Route::get('/sellerpanel/products/{id}/update','ProductController@update');
Route::get('/sellerpanel/storeData','StorePanelController@storeData');
Route::get('/sellerpanel/addproduct', 'StorePanelController@addProduct');
Route::get('/addeffort', 'StorePanelController@addEffort');
Route::post('/addeffort', 'EffortsController@store');
Route::post('/addproduct', 'StorePanelController@saveproduct');


Route::get('/checkout', 'PayPalController@getCheckout');
Route::get('/cancel', 'PayPalController@getCancel');
Route::get('/done', 'PayPalController@getDone');




Route::get('/faq', function () {
    return view('website.faq');
});
Route::get('/contact', function () {
    return view('website.contact_us_01');
});
