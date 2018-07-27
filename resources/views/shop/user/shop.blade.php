@extends("layouts.shop.default")

@section("content")

    <table class="table table-bordered table-hover">
        <tr>
            <th>Id</th>
            <th>店铺图片</th>
            <th>店铺名字</th>
            <th>优惠</th>
            <th>状态</th>
            <th>操作</th>
        </tr>

        @foreach($shops as $shop)
            <tr>
                <td>{{$shop->id}}</td>
                <td><img src="/{{$shop->shop_img}}" alt="" height="70"></td>
                <td>{{$shop->shop_name}}</td>
                <td>{{$shop->discount}}</td>
                <td>{{$shop->status ? "正常" : "禁用"}}</td>
                <td><a href="{{route('shop.change',$shop)}}" class="btn btn-success">@if($shop->status===1) 已通过 @elseif($shop->status===0) 待审核   @endif</a>
                <a href="{{route('shop.danger',$shop)}}" class="btn btn-danger">禁止</a>
                <a href="{{route('shop.del',$shop)}}" class="btn btn-danger">删除</a>
                </td>
            </tr>
        @endforeach


    </table>
    {{$shops->links()}}

@endsection

