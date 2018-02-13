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

Route::get('/',[
    'uses'=>'SuperMarketController@index',
    'as'=>'/'
]);

Route::get('/Contact-Us',[
    'uses'=>'SuperMarketController@contact',
    'as'=>'contact'
]);

Route::get('/Groceries',[
    'uses'=>'SuperMarketController@groceries',
    'as'=>'groceries'
]);


Route::get('/offers',[
    'uses'=>'SuperMarketController@offers',
    'as'=>'offers'
]);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('category/add',[
    'uses'=>'CategoryController@index',
    'as'=>'add-category'
]);

Route::post('category/save',[
    'uses'=>'CategoryController@saveCategoryInfo',
    'as'=>'new-category'
]);

Route::get('category/manage',[
    'uses'=>'CategoryController@manageCategoryInfo',
    'as'=>'manage-category'
]);
Route::get('category/unpublished/{id}',[
    'uses'=>'CategoryController@unpublishedCategoryInfo',
    'as'=>'unpublished-category'
]);

Route::get('category/published/{id}',[
    'uses'=>'CategoryController@publishedCategoryInfo',
    'as'=>'published-category'
]);

Route::get('category/edit/{id}',[
    'uses'=>'CategoryController@editCategoryInfo',
    'as'=>'edit-category'
]);

Route::post('category/update',[
    'uses'=>'CategoryController@updateCategoryInfo',
    'as'=>'update-category'
]);

Route::get('category/delete/{id}',[
    'uses'=>'CategoryController@deleteCategoryInfo',
    'as'=>'delete-category'
]);

Route::get('brand/add',[
    'uses'=>'BrandController@index',
    'as'=>'add-brand'
]);


Route::get('brand/manage',[
    'uses'=>'BrandController@manageBrandInfo',
    'as'=>'manage-brand'
]);

Route::post('brand/save',[
    'uses'=>'BrandController@saveBrandInfo',
    'as'=>'new-brand'
]);


Route::get('product/add',[
    'uses'=>'ProductController@index',
    'as'=>'add-product'
]);

Route::get('product/manage',[
    'uses'=>'ProductController@manageProductInfo',
    'as'=>'manage-product'
]);

Route::post('product/save',[
    'uses'=>'ProductController@saveProductInfo',
    'as'=>'new-product'
]);

Route::get('product/view-product/{id}',[
    'uses'=>'ProductController@viewProductInfo',
    'as'=>'view-product'
]);

Route::get('product/unpublished/{id}',[
    'uses'=>'ProductController@unpublishedProductInfo',
    'as'=>'unpublished-product'
]);

Route::get('product/published/{id}',[
    'uses'=>'ProductController@publishedProductInfo',
    'as'=>'published-product'
]);

Route::get('product/edit-product/{id}',[
    'uses'=>'ProductController@editProductInfo',
    'as'=>'edit-product'
]);
Route::post('product/update-product',[
    'uses'=>'ProductController@updateProductInfo',
    'as'=>'update-product'
]);
Route::get('product/product-details/{id}',[
    'uses'=>'SuperMarketController@productDetails',
    'as'=>'product-details'
]);

Route::post('cart/add-to-card',[
    'uses'=>'CardController@addToCard',
    'as'=>'add-to-card'
]);

Route::post('cart/update-cart-product',[
    'uses'=>'CardController@updateCard',
    'as'=>'update-cart-product'
]);

Route::get('cart/delete-cart-product/{id}',[
    'uses'=>'CardController@deleteCart',
    'as'=>'delete-cart-product'
]);

Route::get('cart/show',[
    'uses'=>'CardController@showCart',
    'as'=>'show-card'
]);
Route::get('checkout',[
    'uses'=>'CheckoutController@index',
    'as'=>'/checkout'
]);

Route::post('checkout/save',[
    'uses'=>'CheckoutController@saveCustomer',
    'as'=>'save-customer'
]);



Route::get('/checkout/show-shipping', [
    'uses'  =>  'CheckoutController@shippingInfo',
    'as'    =>  'show-shipping'
]);

Route::get('/checkout/logout', [
    'uses'  =>  'CheckoutController@customerLogout',
    'as'    =>  'customer-logout'
]);

Route::get('/customer-email-check/{email}', [
    'uses'  =>  'CheckoutController@customerEmailCheck',
    'as'    =>  'customer-email-check'
]);

Route::get('/ajax-product-search/{search}', [
    'uses'  =>  'CheckoutController@ajaxProductSearch',
    'as'    =>  'ajax-product-search'
]);




