<?php

use App\Http\Controllers\DashboardController;
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

// Route::get('/admin', function () {
//     return view('cms.pages.dashboard');
// });
// Route::get('/debug-sentry', function () {
//     throw new Exception('My first Sentry error!');
// });

// Route::get('/admin', 'Admin\DashboardController@index')->name('admin');



Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/categories/{id}', 'CategoryController@detail')->name('categories-detail');
Route::get('/details/{id}', 'DetailController@index')->name('details');
Route::post('/details/{id}', 'DetailController@add')->name('details-add');
Route::get('/cart', 'CartController@index')->name('cart');
Route::delete('/cart/{id}', 'CartController@delete')->name('cart-delete');
Route::get('/success', 'CartController@success')->name('success');
Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/products', 'DashboardProductController@index')->name('dashboard-product');
Route::get('/dashboard/products/{id}', 'DashboardProductController@details')->name('dashboard-product-details');
Route::get('/dashboard/products/add', 'DashboardProductController@create')->name('dashboard-product-create');


Route::get('/dashboard/transactions', 'DashboardTransactionController@index')->name('dashboard-transaction');
Route::get('/dashboard/transactions/{id}', 'DashboardTransactionController@details')->name('dashboard-transaction-details');


Route::get('/dashboard/settings', 'DashboardSettingController@store')->name('dashboard-setting-store');
Route::get('/dashboard/account', 'DashboardSettingController@account')->name('dashboard-setting-account');

// untuk admin
Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {
        Route::get('/', 'DashboardController@index')->name('admin');
        Route::get('/grafik_users', 'DashboardController@grafik_users')->name('grafik');
        Route::resource('category', 'CategoryController');
        Route::resource('user', 'UserController');
        Route::resource('product', 'ProductController');
        Route::resource('product_gallery', 'ProductGalleryController');
    });
