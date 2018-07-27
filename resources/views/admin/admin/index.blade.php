@extends("layouts.shop.default")

@section("content")

    <a href="{{route('admin.reg')}}" class="btn btn-primary">添加</a><br>
    <table class="table table-bordered table-hover">
        <tr>
            <th>Id</th>
            <th>用户名</th>
            <th>头像</th>
            <th>email</th>
            <th>操作</th>
        </tr>

        @foreach($admins as $admin)
            <tr>
                <td>{{$admin->id}}</td>
                <td>{{$admin->username}}</td>
                <td><img src="/{{$admin->logo}}" alt=""  height="40"></td>
                <td>{{$admin->email}}</td>
                <td><a href="" class="btn btn-info">编辑</a>
                    <a href="{{route('admin.del',$admin)}}" class="btn btn-danger">删除</a>
                    <a href="" class="btn btn-default">重置密码</a>
                </td>

            </tr>
        @endforeach


    </table>

@endsection