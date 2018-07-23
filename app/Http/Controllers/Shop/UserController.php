<?php

namespace App\Http\Controllers\Shop;



use App\Models\Shop;
use App\Models\Shop_category;
use App\Models\User;
use App\Tools\ImageUploadTool;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
     //显示首页
    public  function  index(){


     $users =  User::all();

      //显示视图
        return view('shop/user/index',compact('users'));
    }

    //注册
     public  function  reg(Request $request){


     //判断是否是post提交
        if ($request->isMethod("post")){

           //更新数据表
          $shop = new Shop();
          //设置店铺的出状态为0
           $shop->status =0;
           $shop->shop_img = "";
         //批量赋值
           $shop->fill($request->input());
          //图片上传
          $file = $request->file('shop_img');

           //判断是否上传了图片
          if ($file) {

              //存在就上传
              $filename = ImageUploadTool::save($request->file('shop_img'),'','photo');
             //dd($shop->shop_img);
              $shop->shop_img = $filename;
         }

          //开启事务
           DB::transaction(function () use ($shop,$request) {
               //保存商家信息
                $shop->save();
              //Shop::create($request->input());
              //添加用户信息
              User::create([
                   //  'email' => $request->input('email'),
                   'shop_id' => $shop->id,
                   'password' => bcrypt($request->input('password')),
                   'name' => $request->input('name'),
                   'email' => $request->input('email'),
                   'status' => 1
              ]);
           });
           //添加成功


           //跳转至添加页面
            return redirect()->route("user.index");
        }

       //得到所有商家分类
       $cates = Shop_category::where("status", 1)->get();

       //显示视图
       return view('shop/user/reg',compact('cates'));

    }

    //登陆
    public  function  login(Request $request){
        //判断是否是post提交

        if($request->isMethod('post')){

            //验证账号
           if (Auth::attempt(['name'=>$request->post('name'),'password'=>$request->post('password'),'status'=>1])){
                return redirect()->route("user.select");
            }
        }

     return view('shop/user/login');

    }
    public  function  select(){
        $id = Auth::id();

//        dd($id);
        //找到当前id的所有数据
        $users = User::find($id);



     return view('shop/user/select',compact('users'));
    }
    public  function  edit(Request $request,$id){
        //找到id当前的所有数据
       $users  =  User::find($id);

        if ($request->isMethod('post')){
            $data = $request->all();

            $users->update($data);
            //跳转
            return redirect()->route('user.select');


        }
        //显示视图
             return    view('shop/user/edit',compact('users'));

    }
       //注销
    public  function  out(Request $request){
        Auth::logout();
        //跳转
        return redirect()->route('user.login');


    }

    //编辑
    public  function  edits(Request $request ,$id){
        //找到当前id的数据
        $users = User::findOrFail($id);
        dd($users);

        //判断是否是post方式提交
        if ($request->isMethod('post')){
            $data = $request->all();



            //更改数据
            $users->update($data);


            //跳转
//            return redirect()->route('user.index');
        }
        //显示视图
//        return view('shop/user/edit1',compact('users'));

    }



}
