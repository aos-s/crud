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

Route::get('/', function () {
    return view('welcome');
});


//初期表示
Route::get('customer', 'CustomerController@index')->name('index');
//検索
Route::post('customer', 'CustomerController@find')->name('find');
//新規登録
Route::get('customer/create', 'CustomerController@create')->name('create');
//編集
Route::get('customer/edit/{id}', 'CustomerController@edit')->name('edit');
//詳細
Route::get('customer/detail/{id}', 'CustomerController@detail')->name('detail');
//登録
Route::post('customer/store', 'CustomerController@store')->name('store');
//更新
Route::post('customer/update', 'CustomerController@update')->name('update');
//削除
Route::get('customer/delete/{id}', 'CustomerController@delete')->name('delete');
