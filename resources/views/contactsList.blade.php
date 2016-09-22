@extends('base')
@section('content')
<button id="toolbar" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span>新增</button>
<table data-mobile-responsive="true" data-toolbar="#toolbar" data-toggle="table" data-striped="true" data-pagination="true" data-search="true" data-show-toggle="true" data-checkbox="true">
    <thead>
        <tr>
            <th>选择</th>
            <th>姓名</th>
            <th>手机</th>
            <th>生日</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $v)
        <tr>
            <td><input type="checkbox"></td>
            <td>{{ $v->name }}</td>
            <td>{{ $v->telphone }}<span onclick="call({{ $v->telphone }})" class="glyphicon glyphicon-earphone text-success"></span></td>
            <td>{{ $v->birthday }}</td>
            <td><a class="glyphicon glyphicon-pencil"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="glyphicon glyphicon-trash"></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
@section('otherjs')
<script>
function call(telphone){
    try{
        if (/Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
            window.location.href='tel:'+telphone;
        }else{
            layer.msg('请在手机端打电话！');
        }
    }catch(e){}
    }
</script>
@endsection