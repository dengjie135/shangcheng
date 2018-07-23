@extends("layouts.shop.default")

@section("content")
<<<<<<< HEAD
    <a href="{{route('user.reg')}}" class="btn btn-info">添加</a>
=======

>>>>>>> f0c73c801c19898524ac697b5dc1b72e93188d95
    <table class="table table-bordered table-hover">
        <tr>
            <th>Id</th>
            <th>用户名</th>
            <th>邮箱</th>
<<<<<<< HEAD
=======
            <th>密码</th>
>>>>>>> f0c73c801c19898524ac697b5dc1b72e93188d95
            <th>所属商家</th>
            <th>状态</th>
            <th>操作</th>
        </tr>

            @foreach($users as $user)
         <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
<<<<<<< HEAD

            <td>{{$user->shop->shop_name}}</td>
            <td>{{$user->status}}</td>
            <td><a href="{{route('user.edits'),$user}}" class="btn btn-info">编辑</a>
=======
            <td>{{$user->password}}</td>
            <td>{{$user->shop_id}}</td>
            <td>{{$user->status}}</td>
            <td><a href="" class="btn btn-info">编辑</a>
>>>>>>> f0c73c801c19898524ac697b5dc1b72e93188d95
                <a href="" class="btn btn-danger">删除</a>
            </td>
         </tr>
            @endforeach


    </table>
@endsection