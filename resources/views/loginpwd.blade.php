<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>修改支付密码</title>
<meta content="app-id=984819816" name="apple-itunes-app" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, maximum-scale=1.0" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="black" name="apple-mobile-web-app-status-bar-style" />
<meta content="telephone=no" name="format-detection" />
<link href="{{url('css/comm.css')}}" rel="stylesheet" type="text/css" />
<link href="{{url('css/login.css')}}" rel="stylesheet" type="text/css" />
<link href="{{url('css/findpwd.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{url('layui/css/layui.css')}}">
<link rel="stylesheet" href="{{url('css/modipwd.css')}}">
<script src="{{url('js/jquery-1.11.2.min.js')}}"></script>
</head>
<body>
    
<!--触屏版内页头部-->
<div class="m-block-header" id="div-header">
    <strong id="m-title">修改登录密码</strong>
    <a href="javascript:history.back();" class="m-back-arrow"><i class="m-public-icon"></i></a>
    <a href="/" class="m-index-icon"><i class="m-public-icon"></i></a>
</div>



    <div class="wrapper">
        <form class="layui-form" action="">
            <div class="registerCon regwrapp">
                <div class="account">
                    <em>账户名：</em> <i>155****3866</i>
                </div>
                <div><em>当前密码</em><input type="password" class="nowpwd"></div>
                <div><em>新密码</em><input type="password" class="newpwd" placeholder="请输入6-16位数字、字母组成的新密码"></div>
                <div><em>确认新密码</em><input type="password" class="newpwds" placeholder="确认新密码"></div>
                <div class="save"><span id="edit">修改</span></div>
            </div>
        </form>
    </div>
<input type="hidden" value="<?php echo csrf_token()?>" id="_to">

<script src="{{url('/layui/layui.js')}}"></script>
<script>
//Demo
$(function(){
    layui.use('layer', function(){
        var layer = layui.layer;
        $('#edit').click(function(){
            var nowpwd=$('.nowpwd').val();
            var newpwd=$('.newpwd').val();
            var newpwds=$('.newpwds').val();
            var _token=$('#_to').val();
            $.post(
                "{{url('IndexController/loginpwdup')}}",
                {nowpwd:nowpwd,newpwd:newpwd,newpwds:newpwds,_token:_token},
                function(res){
                    if(res==1){
                        layer.msg("修改成功",{icon:1,time:3000},function(){
                            history.go(0);
                        })
                    }else if(res==3){
                        layer.msg("原始密码错误",{icon:2})
                    }else if(res==4){
                        layer.msg('两次密码输入不一致',{icon:2})
                    }else if(res==2){
                        layer.msg('密码修改失败',{icon:2})
                    }
                }
            )
        })

    });
})

</script>    

</body>
</html>
    