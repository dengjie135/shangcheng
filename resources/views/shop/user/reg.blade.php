<<<<<<< HEAD


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Minimal and Clean Sign up / Login and Forgot Form by FreeHTML5.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FreeHTML5.co" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />




    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="/user/css/bootstrap.min.css">
    <link rel="stylesheet" href="/user/css/animate.css">
    <link rel="stylesheet" href="/user/css/style.css">


    <!-- Modernizr JS -->
    <script src="/user/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="/user/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<style>

         input::-webkit-input-placeholder {
                 /* placeholder颜色  */
                         color: #0b97c4;
                 /* placeholder字体大小  */
                         font-size: 20px;
                 /* placeholder位置  */
                         /*text-align: right;*/
             }
         input {
                        border: 1px solid red;
                    }
         </style>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <ul class="menu">
                <li class="active"><a href="index.html">User_reg</a></li>

            </ul>
        </div>
    </div>
    <div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="注册">网站模板</a></div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">


            <!-- Start Sign In Form -->
            <form action="{{route('user.reg')}}" class="fh5co-form animate-box" data-animate-effect="fadeIn" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <h2>商户注册</h2>
                <div class="form-group">
                    <label for="username" class="sr-only">名称</label>
                    <input type="text" class="form-control" id="username" placeholder="名称" autocomplete="off" name="shop_name">
                </div>

                <div class="form-group">
                    <label for="text" class="sr-only">店铺分类</label>
                    <select name="shop_cate_id" class="form-control">

                        @foreach($cates as $cate)
                            <option value="{{$cate->id}}">{{$cate->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="text" class="sr-only">评分</label>
                    <input type="text" class="form-control" id="text" placeholder="评分" autocomplete="off" name="shop_rating">
                </div>
                <div class="form-group">
                    <label for="text" class="sr-only">是否是品牌</label>
                    <input type="checkbox" name="brand" value="1" @if(old('brand')==1) checked @endif>品牌
                </div>
                <div class="form-group">
                    <label for="text" class="sr-only">是否准时送达</label>
                    <input type="checkbox" name="on_time" value="1" @if(old('on_time')==1) checked @endif> 准时送达
                </div>
                <div class="form-group">
                    <label for="text" class="sr-only">是否蜂鸟配送</label>
                    <input type="checkbox" name="fengniao" value="1" @if(old('fengniao')==1) checked @endif> 蜂鸟送达
                </div>
                <div class="form-group">
                    <label for="text" class="sr-only">是否保标记</label>
                    <input type="checkbox" name="bao" value="1" @if(old('bao')==1) checked @endif> 保
                </div>
                <div class="form-group">
                    <label for="text" class="sr-only">是否票标记</label>
                    <input type="checkbox" name="piao" value="1" @if(old('piao')==1) checked @endif> 票
                </div>
                <div class="form-group">
                    <label for="text" class="sr-only">是否准标记</label>
                    <input type="checkbox" name="zhun" value="1" @if(old('zhun')==1) checked @endif> 准
                </div>
                <div class="form-group">
                    <label for="text" class="sr-only">起送金额</label>
                    <input type="text" class="form-control" id="text" placeholder="起送金额" autocomplete="off" name="start_send">
                </div>
                <div class="form-group">
                    <label for="text" class="sr-only">配送费</label>
                    <input type="text" class="form-control" id="text" placeholder="配送费" autocomplete="off" name="send_cost">
                </div>
                <div class="form-group">
                    <label for="text" class="sr-only">店公告</label>
                    <input type="text" class="form-control" id="text" placeholder="店公告" autocomplete="off" name="notice">
                </div>
                <div class="form-group">
                    <label for="text" class="sr-only">优惠信息</label>
                    <input type="text" class="form-control" id="text" placeholder="优惠信息" autocomplete="off" name="discount">
                </div>
                <div class="form-group">
                    <label for="text" class="sr-only">状态:1正常,0待审核,-1禁用</label>
                    <input type="text" class="form-control" id="text" placeholder="状态:1正常,0待审核,-1禁用" autocomplete="off" name="status">
                </div>
                <div class="form-group">
                    <label for="text" class="sr-only">店铺图片</label>
                    <input type="file" name="shop_img">
                </div>
                <div class="form-group">
                    <label for="text" class="sr-only">用户名</label>
                    <input type="text" class="form-control" id="text" placeholder="用户名" autocomplete="off" name="name">
                </div>
                <div class="form-group">
                    <label for="text" class="sr-only">密码</label>
                    <input type="text" class="form-control" id="text" placeholder="密码" autocomplete="off" name="password">
                </div>
                <div class="form-group">
                    <label for="text" class="sr-only">email</label>
                    <input type="text" class="form-control" id="text" placeholder="email" autocomplete="off" name="email">
                </div>

                <div class="form-group">
                    <input type="submit" value="注册" class="btn btn-primary">
                </div>
            </form>
            <!-- END Sign In Form -->

        </div>
    </div>
    <div class="row" style="padding-top: 60px; clear: both;">
        <div class="col-md-12 text-center"><p><small>&copy; All Rights Reserved. More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></small></p></div>
    </div>
</div>

<!-- jQuery -->
<script src="/user/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/user/js/bootstrap.min.js"></script>
<!-- Placeholder -->
<script src="/user/js/jquery.placeholder.min.js"></script>
<!-- Waypoints -->
<script src="/user/js/jquery.waypoints.min.js"></script>
<!-- Main JS -->
<script src="/user/js/main.js"></script>


</body>
</html>

=======
@extends("layouts.shop.login")
@section('form')

    <form method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="name">店铺名称：</label>
            <input type="text" name="shop_name" class="form-control" value="{{ old('shop_name') }}">
        </div>
        <div class="form-group">
            <label >店铺分类：</label>
            <select name="shop_cate_id" class="form-control">



            </select>
        </div>
        <div class="form-group">
            <label for="shop_img">店铺图片：</label>
            <input type="file" name="shop_img">
        </div>
        <div class="form-group">
            <label for="start_send">起送金额：</label>
            <input type="number" name="start_send" class="form-control" value="">
        </div>
        <div class="form-group">
            <label for="send_cost">配送费：</label>
            <input type="number" name="send_cost" class="form-control" value="">
        </div>

        <div class="form-group">
            <label for="notice">店铺公告：</label>
            <textarea name="notice" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="discount">优惠信息：</label>
            <textarea name="discount" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="brand" > 品牌连锁店
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="on_time" > 准时送达
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="fengniao" > 蜂鸟配送
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="bao" > 保
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="piao" > 票
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="zhun" > 准
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="email">邮箱(账号)：</label>
            <input type="email" name="email" class="form-control" value="">
        </div>
        <div class="form-group">
            <label for="password">密码：</label>
            <input type="password" name="password" class="form-control" >
        </div>
        <div class="form-group">
            <label for="password_confirmation">确认密码：</label>
            <input type="password" name="password_confirmation" class="form-control" >
        </div>
        {{ csrf_field() }}
        <button type="submit" class="btn btn-primary">提交</button>
    </form>
@endsection
>>>>>>> f0c73c801c19898524ac697b5dc1b72e93188d95
