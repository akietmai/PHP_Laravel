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

Route::get('/', 'App\Http\Controllers\HomeController@index');

// Route::get('user-management', function () {
//     return 'User screen';
// })->name('user');

// Route::get('product', function () {
//     return 'Product screen';
// });

// Route::get('news', function () {
//     return 'News screen';
// });

// Route::get('service', function () {
//     return 'Service screen';
// });

// Route::get('news/{id}/category/{cateID}', function ($id, $cateId) {
//     return "Bài viết số {$id}. Category ID : {$cateId}";
// });

// Route::get('user/{id}/branch/{branchID}', function ($id, $branchId) {
//     return "User ID : {$id} - Chi nhánh : {$branchId}";
// })->name('user-detail');

// // Route::group(['prefix' => 'backend', 'namespace' => 'App\Http\Controllers\Backend']), function(){}
// Route::prefix('backend')->namespace('App\Http\Controllers\Backend')->group(function () {
//     Route::get('user', 'UserController@index')->name('backend.user');

//     Route::get('user/create', 'UserController@create')->name('backend.user.create');

//     Route::post('user', 'UserController@store')->name('backend.user.store');

//     Route::put('user/update', 'UserController@update')->name('backend.user.update');

//     Route::get('product', 'ProductController@index')->name('backend.product');

//     Route::get('category', 'CategoryController@index')->name('backend.category');

//     Route::get('news', 'NewsController@index')->name('backend.news');
// });

// Route::resource('user', 'App\Http\Controllers\Backend\HomeController');

// Chỉ chạy những phương thức trong hàm only()
// Route::resource('home', 'App\Http\Controllers\Backend\HomeController')->only('index', 'create');

// Chạy tất cả phương thức trù những phương thức trong hàm except()
// Route::resource('home', 'App\Http\Controllers\Backend\HomeController')->except('index', 'create');
