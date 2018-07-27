<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Tools\ImageUploadTool;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends BaseController
{

     public  function index(){
        $admins  =  Admin::all();
        //显示视图
        return  view('admin/admin/index',compact('admins'));

     }
     //添加管理员
     public  function reg(Request $request){

          //判断是否是post提交
         if($request->isMethod('post')){

             $file = $request->file('img');
             //判断是否上传图片
                $data=$request->post();
                $data['password'] = encrypt($data['password']);
            if ($file){
                //存在就上传
                //存在就上传

                $filename = ImageUploadTool::save($request->file('img'),'','photo');
                //dd($shop->shop_img);
                $data['logo'] = $filename;


             }
             Admin::create($data);
            //跳转到首页
             return redirect()->route('admin.index');

         }
         return view('admin/admin/reg');

     }


     //删除管理员
    public function  del(Request $request,$id){
        //1号管理员不能删除
        if ($id==1){
            return back()->with("danger","超级管理员不能删除");
        }

          //找到数据
         $admins = Admin::find($id);
         $admins->delete();

         return redirect()->route('admin.index');

    }

    //管理员登陆
    public  function  login(Request $request){
        //判断是否POST提交
        if ($request->isMethod("post")) {
            //验证

            //验证账号密码
            if (Auth::guard("admin")->attempt(['username' => $request->post('username'), 'password' => $request->password])) {
                // session()->flash("success","登录成功");
                //登录成功
                return redirect()->route("admin.shop.index")->with("success", "登录成功");
            } else {
                return redirect()->route("admin.login")->with("danger", "账号或密码错误");
            }
        }
        return view("admin.admin.login");


    }




}
