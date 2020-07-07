<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('auth.login');
});

Auth::routes(['register'=>false]);

Route::get('/dashboard', 'AdminController@index')->middleware('auth')->name('admin.index');
Route::get('/logout',function(){
    Auth::logout();
    return view('auth.login');
});
Route::get('/hello','Waiter\OrderController@hello');
Route::resource('/admin/roomtypes','Admin\RoomTypeController');
Route::resource('/admin/rooms','Admin\RoomController');
Route::resource('/receptionist/customer','Customer\CustomerController');
Route::get('/receptionist/customer/{id}/addrooms/','Customer\CustomerController@viewRoom')->name('room.view');
Route::post('/receptionist/customer/{id}/addrooms/','Customer\CustomerController@storeRoom')->name('room.add');
Route::resource('/admin/category','Admin\CategoryController');
Route::resource('/admin/items','Admin\ItemController');
Route::get('/waiter/order/{room}','Waiter\OrderController@selectCategory')->name('order.category');
Route::resource('/waiter/order','Waiter\OrderController');
Route::get('/waiter/order/{room}/{category}','Waiter\OrderController@selectItem')->name('order.item');
Route::get('/waiter/order/{room}/{category}/{item}','Waiter\OrderController@selectQuantity')->name('order.quantity');
Route::post('/waiter/order/{room}/{category}/{item}/save','Waiter\OrderController@saveOrder')->name('order.save');

