@extends("layouts.shop.default")

@section("content")

    <table class="table table-bordered table-hover">
        <tr>
            <th>Id</th>
            <th>用户名</th>
            <th>邮箱</th>
            <th>密码</th>
            <th>所属商家</th>
            <th>状态</th>
            <th>操作</th>
        </tr>

            @foreach($users as $user)
         <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->shop_id}}</td>
            <td>{{$user->status}}</td>
            <td><a href="" class="btn btn-info">编辑</a>
                <a href="" class="btn btn-danger">删除</a>
            </td>
         </tr>
            @endforeach


    </table>
@endsection