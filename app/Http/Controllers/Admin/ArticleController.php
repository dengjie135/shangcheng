<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //显示首页
    public function  index(){
      $articles =  Article::all();
      //显示视图
        return view('admin/admin/a_index',compact('articles'));


    }
}
