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

Route::get('/','PageController@mainfun')->name('mainpage');

Route::get('login','PageController@loginfun')->name('loginpage');

Route::get('brand/{id}','PageController@brandfun')->name('brandpage');

Route::get('promotion','PageController@promotionfun')->name('promotionpage');

Route::get('register','PageController@registerfun')->name('registerpage');

Route::get('shoppingcart','PageController@shoppingcartfun')->name('shoppingcartpage');

Route::get('subcategory/{id}','PageController@subcategoryfun')->name('subcategorypage');

Route::get('itemdetail/{id}','PageController@itemdetailfun')->name('itempage');


Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');

//phph artisan make:controller ItemController --resource





Route::middleware('role:Admin')->group (function(){
	Route::resource('items','ItemController');
	Route::resource('brands','BrandController');
	Route::resource('categories','CategoryController');
	Route::resource('subcategories','SubcategoryController');
	Route::resource('orders','OrderController');



});


Auth::routes();
Route::get('loginform','PageController@loginfun')->name('loginpage');
Route::get('registerform','PageController@registerfun')->name('registerpage');

Route::get('/home', 'HomeController@index')->name('home');
