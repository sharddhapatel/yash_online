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

Route::get('/', function () {
    return view('welcome');
});
route::get('login','HomeController@login');
route::get('adminlogin','HomeController@adminlogin');
route::get('logout','HomeController@logout');

Route::group(['middleware'=>'admin'],function()
{

Route::get('/','HomeController@dashbord1');
Route::get('table','HomeController@table');
Route::get('catagory','HomeController@catagory');


Route::post('insertcall','HomeController@insertcall');
Route::get('showcontact','HomeController@showcontact');
route::get('deletecontact/{id}','HomeController@deletecontact');
Route::get('contact','HomeController@callus');
Route::post('insertcategory','CatagoryController@insertcategory');
Route::get('showcatagory','CatagoryController@show');
route::get('editprocess/{id}','CatagoryController@editca');
route::post('editprocess','CatagoryController@editcatagory');
route::get('deletecatagory/{id}','CatagoryController@deletecatagory');
route::get('product','ProductController@productcatagory');
route::post('insertpc','ProductController@insertpc');
Route::get('showpc','ProductController@show');
route::get('editcatag/{id}','ProductController@editcustomer');
route::post('editcatag','ProductController@editdata');
route::get('deleteproduct/{id}','ProductController@deleteproduct');
route::get('showproductdetail/{id}','ProductController@showproductdetail');
});
route::get('home','Client\MainController@home');
route::get('productdetail/{id}','Client\MainController@showproductdetail');
Route::get('cart','Client\MainController@card');
Route::get('update-cart','Client\MainController@update');

Route::delete('remove-from-cart','Client\MainController@remove');

Route::get('addtocart/{id}','Client\MainController@addToCart');
Route::get('call','AdminController@apply');
Route::post('insertcontact','AdminController@insertcontact');
