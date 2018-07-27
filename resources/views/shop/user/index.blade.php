@extends("layouts.shop.default")

@section("content")




    <a href="{{route('user.reg')}}" class="btn btn-info">添加</a><br>
    <table class="table table-bordered table-hover">
        <tr>
            <th>Id</th>
            <th>用户名</th>
            <th>邮箱</th>
            <th>所属商家</th>
            <th>状态</th>
            <th>操作</th>
        </tr>

            @foreach($users as $user)
         <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->shop->shop_name}}</td>
            <td>{{$user->status ? "正常" : "禁用"}}</td>
             <td><a href="{{route('user.edits',$user)}}" class="btn btn-info">编辑</a>
                 <a href="{{route('user.del',$user)}}" class="btn btn-danger">删除</a>

             </td>
         </tr>
         @endforeach


    </table>
    {{$users->links()}}
@endsection