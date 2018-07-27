@extends("layouts.shop.default")

@section("content")
    <style>


        .header{
            width: 100%;
            height: 150px;
            background: rosybrown;
            text-align: center;
            padding-top: 30px;
        }
    </style>

    <div class="header"  >
        <h1>管理员登陆<small>Login</small></h1>
    </div>
    <br><br>
    <table class="table table-bordered table-striped table-striped">
        <form class="btn-info" enctype="multipart/form-data" method="post" >
            {{csrf_field()}}
            <div class="form-group">
                <label for=""> 用户名</label>
                <input type="text" class="form-control" id="" placeholder="Username"  name="username">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">密码</label>
                <input type="password" class="form-control" id="" placeholder="Password" name="password">
            </div><br><br>



            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </table>
@endsection