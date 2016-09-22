@extends('base')
@section('content')
    <form  class="addContactsform" method="post" action="#">
        姓名:
        <input class="input-text radius" type="text" value="" name="name" datatype="*" nullmsg="姓名不能为空" />
        手机号码:
        <input class="input-text radius" type="text" value="" name="telphone" datatype="*" nullmsg="手机号码不能为空" />
        生日:
        <input class="input-text radius" type="text" value="" name="birthday" />
        <br><input type="submit" class="btn btn-primary radius" value="添加">
    </form>
@endsection
@section('otherjs')
<script>
$(".addContactsform").Validform();
$(function(){
            $(".addContactsform").ajaxForm({
                //定义返回JSON数据，还包括xml和script格式
                dataType:'json',
                beforeSend: function() {
                    //表单提交前做表单验证
                },
                success: function(data) {
                    //提交成功后调用
                    layer.alert(data.message,function(){
                        window.location.href = '/#';
//                        setTimeout(function() { 
//                            
//                        }, 1000);
                    })
                }
            });
        });
</script>
@endsection
