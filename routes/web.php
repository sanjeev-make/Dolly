<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\FrontendController;


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

Route::get('/', '\App\Http\Controllers\FrontendController@welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'authenticate'])->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth', 'admin']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\AdminController@dashboard')->name('dashboard.index');
    Route::get('/forminput', 'App\Http\Controllers\AdminController@formelement')->name('formelement');
    Route::get('/chart', 'App\Http\Controllers\ChartController@chart')->name('chart');
    Route::get('/table', 'App\Http\Controllers\TableController@table')->name('table');
    Route::get('/product/create', 'App\Http\Controllers\ProductController@create')->name('product.create');
    Route::post('/product/store', 'App\Http\Controllers\ProductController@store')->name('product.store');
    Route::get('/destroy/{id?}', 'App\Http\Controllers\ProductController@destroy')->name('product.destroy');


    Route::get('/productcategory/create', 'App\Http\Controllers\ProductCategoryController@create')->name('productcategory');
    Route::post('/productcategory/store', 'App\Http\Controllers\ProductCategoryController@store')->name('store.category');

});
Route::get('/send-email', 'App\Http\Controllers\MailController@sendEmail');
Route::get('/book_detail_page/{id?}', '\App\Http\Controllers\FrontendController@detail')->name('book.detail');
Route::get('/book_category', '\App\Http\Controllers\FrontendController@category');
Route::get('/checkout', '\App\Http\Controllers\CheckoutController@checkoutcreate');
Route::get('/wishlist', '\App\Http\Controllers\WishlistController@wishlistcreate');




