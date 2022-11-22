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

// Route::get('/', function () {
//     return view('welcome');
// });
route::get('login','Admin\HomeController@login');
route::get('adminlogin','Admin\HomeController@adminlogin');
route::get('logout','Admin\HomeController@logout');
Route::group(['middleware'=>'admin'],function()
{
Route::get('table','Admin\HomeController@table');
Route::get('dashboad','Admin\HomeController@dashbord');

Route::post('insertcall','Admin\HomeController@insertcall');
Route::get('showcontact','Admin\HomeController@showcontact');
route::get('deletecontact/{id}','Admin\HomeController@deletecontact');
Route::get('contact','Admin\HomeController@callus');
Route::get('catagory','Admin\HomeController@catagory');

Route::post('insertcategory','Admin\CatagoryController@insertcategory');
Route::get('showcatagory','Admin\CatagoryController@show');
route::get('editprocess/{id}','Admin\CatagoryController@editca');
route::post('editprocess','Admin\CatagoryController@editcatagory');
route::get('deletecatagory/{id}','Admin\CatagoryController@deletecatagory');

route::get('product','Admin\ProductController@productcatagory');
route::post('insertpc','Admin\ProductController@insertpc');
Route::get('showpc','Admin\ProductController@show');
route::get('editcatag/{id}','Admin\ProductController@editcustomer');
route::post('editcatag','Admin\ProductController@editdata');
route::get('deleteproduct/{id}','Admin\ProductController@deleteproduct');
route::get('showproductdetail/{id}','Admin\ProductController@showproductdetail');
Route::get('color','Admin\ProductController@color');
});

Route::get('call','Client\AdminController@apply');
Route::post('insertcontact','Client\AdminController@insertcontact');
Route::post('contact','Client\AdminController@contactsubmit');
//======================================================= Client==================================================
route::get('/','Client\MainController@home');

route::get('productdetail/{id}/{cname}','Client\MainController@showproductdetail');

Route::get('cart','Client\MainController@card');
Route::get('update-cart','Client\MainController@update');
Route::delete('remove-from-cart','Client\MainController@remove');
Route::get('addtocart/{id}','Client\MainController@addToCart');

Route::get('strip','Client\MainController@strip');
Route::post('strip','Client\MainController@strippayment');

Route::get('cookie/set','CookieController@setCookie');
Route::get('cookie/get','CookieController@getCookie');


