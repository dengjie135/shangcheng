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
//平台
Route::domain('www.xm.com')->namespace('Admin')->group(function () {
    //店铺分类
    Route::get('shop_category/index',"shop_categoryController@index")->name('shop_category.index');
    Route::any('shop_category/add',"shop_categoryController@add")->name('shop_category.add');
    Route::any('shop_category/del/{id}',"shop_categoryController@del")->name('shop_category.del');
    Route::any('shop_category/edit/{id}',"shop_categoryController@edit")->name('shop_category.edit');
});

//商户
Route::domain('sp.com')->namespace('Shop')->group(function () {
        Route::get('user/reg', "UserController@reg");
    Route::get('user/index', "UserController@index");
});

