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
    Route::any('admin/index',"AdminController@index")->name('admin.index');
    Route::any('admin/reg',"AdminController@reg")->name('admin.reg');
    Route::any('admin/del/{id}',"AdminController@del")->name('admin.del');
    Route::any('admin/login',"AdminController@login")->name('admin.login');
    Route::any('article/index',"ArticleController@index")->name('article.index');
});

//商户
Route::domain('sp.com')->namespace('Shop')->group(function () {

    Route::any('user/reg', "UserController@reg")->name('user.reg');
    Route::get('user/index', "UserController@index")->name('user.index');
    Route::any('user/login', "UserController@login")->name('user.login');
    Route::any('user/select', "UserController@select")->name('user.select');
    Route::any('user/edit/{id}', "UserController@edit")->name('user.edit');
    Route::any('user/out', "UserController@out")->name('user.out');
    Route::any('user/edits/{id}', "UserController@edits")->name('user.edits');
    Route::any('user/del/{id}', "UserController@del")->name('user.del');
    Route::any('shop/index', "ShopController@index")->name('shop.index');
    Route::any('category/index', "Menu_categoryController@index")->name('category.index');
    Route::any('shop/change/{id}', "ShopController@change")->name('shop.change');
    Route::any('shop/danger/{id}', "ShopController@danger")->name('shop.danger');
    Route::any('shop/del/{id}', "ShopController@del")->name('shop.del');
    Route::any('menu_category/add', "Menu_categoryController@add")->name('menu_category.add');
    Route::any('menu_category/edit/{id}', "Menu_categoryController@edit")->name('menu_category.edit');
    Route::any('menu_category/del/{id}', "Menu_categoryController@del")->name('menu_category.del');
    Route::any('menu_category/index', "Menu_categoryController@index")->name('menu_category.index');
    Route::any('menu/add', "MenuController@add")->name('menu.add');
    Route::any('menu/index', "MenuController@index")->name('menu.index');
    Route::any('user/select1', "UserController@select1")->name('user.select1');
    Route::any('user/add', "UserController@add")->name('user.add');
});


