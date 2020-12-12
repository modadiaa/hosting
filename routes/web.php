<?php

//use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/* Start Front End */
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shop', 'HomeController@shop')->name('shop');
Route::get('/category/{id}', 'HomeController@showCates') ;
Route::get('/contact', function(){
     return view('front.contact');
} ) ;
Route::get('/productDetail/{id}', 'HomeController@detailPro') ;
Route::get('/cart', 'CartController@index');
Route::get('/cart/addItem/{id}', 'CartController@addItem');
Route::put('/cart/update/{id}', 'CartController@update');
Route::get('/cart/remove/{id}', 'CartController@destroy');
Route::get('/checkout', 'CheckoutController@index');

Route::group(['middleware'=>'auth'],function(){
    Route::get('/profile', 'ProfileController@index');
    Route::get('/orders', 'ProfileController@orders');
    Route::get('/address', 'ProfileController@address');
    Route::put('/updateAddress', 'ProfileController@updateAddress');
    Route::get('/password', 'ProfileController@password');
    Route::put('/updatePassword', 'ProfileController@updatepassword');
    Route::get('/WishList', 'HomeController@View_wishlist');
    Route::post('/addToWishList', 'HomeController@addWishList')->name('addToWishList');
    Route::get('/removeWishList/{id}', 'HomeController@removeWishList');

});


/* End Front End */

/* Start Admin  */
Auth::routes();

Route::group(['prefix' => 'admin' , 'middleware' =>['auth' ,'admin']] , function(){
    Route::get('/', function () {
        return view('admin.index');
    });
Route::resource('product', 'ProductController');
Route::resource('category', 'CategoriesController');
Route::put('/formvalidate' , 'CheckoutController@address');
});
