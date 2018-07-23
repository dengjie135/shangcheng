<<<<<<< HEAD
1.商家注册时，同步填写商家信息，商家账号和密码
2.商家注册后，需要平台审核通过，账号才能使用
3.平台可以直接添加商家信息和账户，默认已审核通过



路由需要分组

Route::get('/', function () {
    return view('welcome');
});
//平台
Route::domain('admin.ele.com')->namespace('Admin')->group(function () {
    //店铺分类
    Route::get('shop_category/index',"ShopCategoryController@index");
    });

//商户
Route::domain('shop.ele.com')->namespace('Shop')->group(function () {
    Route::get('user/reg',"UserController@reg");
    Route::get('user/index',"UserController@index");
});


务保证商家信息和账号同时注册成功
商户登录正常登录，登录之后判断店铺状态是否为1，事务管理上传图片显示没有匹配的配置规定
已经解决，商户登陆值能是状态为一的账户，查看自己的信息并可以修改