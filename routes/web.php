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



Route::get('/', [
 'uses'=>'ProductController@getIndex',
    'as'=>'product.index'
]);

Route::get('/checkout', [
    'uses'=>'ProductController@getCheckout',
    'as'=>'checkout'
]);

Route::post('/checkout', [
    'uses'=>'ProductController@postCheckout',
    'as'=>'checkout'
]);

Route::get('/shopping-cart', [
    'uses'=>'ProductController@getCart',
    'as'=>'product.shoppingCart'
]);

Route::get('/add-to-cart/{id}',[
    'uses'=>'ProductController@getAddtoCart',
    'as'=>'product.addToCart'
]);

Route::group(['middleware'=>'guest'],function (){
    Route::get('/signup', [
        'uses'=>'User@getSingup',
        'as'=>'user.signup'
    ]);


    Route::post('/signup', [
        'uses'=>'User@store',
        'as'=>'user.signup'
    ]);



    Route::get('/signin', [
        'uses'=>'User@getSingin',
        'as'=>'user.signin'
    ]);


    Route::post('/signin', [
        'uses'=>'User@store',
        'as'=>'user.signin'
    ]);


});

Route::group(['middleware'=>'auth'],function () {


    Route::get('/user/profile', [
        'uses' => 'User@getProfile',
        'as' => 'user.profile'
    ]);


    Route::get('/user/logout', [
        'uses' => 'User@egtlogout',
        'as' => 'user.logout'
    ]);
});