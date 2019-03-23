@extends('must')
@section('title','登陆')
@section('content')
<body>

<!--触屏版内页头部-->
<div class="m-block-header" id="div-header">
    <strong id="m-title">登录</strong>
    <a href="javascript:history.back();" class="m-back-arrow"><i class="m-public-icon"></i></a>
    <a href="/" class="m-index-icon"><i class="home-icon"></i></a>
</div>
<input type="hidden" id="_token" name="_token" value="<?php echo csrf_token(); ?>">
<div class="wrapper">
    <div class="registerCon">
        <div class="binSuccess5">
            <ul>
                <li class="accAndPwd">
                    <dl>
                        <div class="txtAccount">
                            <input id="txtAccount" type="text"  placeholder="请输入您的手机号码/邮箱"><i></i>
                        </div>
                        <cite class="passport_set" style="display: none"></cite>
                    </dl>
                    <dl>
                        <input id="txtPassword" type="password" placeholder="密码" value="" maxlength="20" /><b></b>
                    </dl>
                    <dl>
                        <input id="verifycode" type="text" placeholder="请输入验证码" name="verifycode" maxlength="4" /><b></b>
                        <img src="{{url('verify/create')}}" alt="" id="img">
                    </dl>
                    <dl>
                        <a id="btnLogin" href="javascript:;" class="orangeBtn loginBtn">登录</a>
                    </dl>
                </li>
            </ul>

        </div>

        <br>
        <div class="forget">
            <a href="https://m.1yyg.com/v44/passport/FindPassword.do">忘记密码？</a>
            <b></b>
            <a href="{{url('IndexController/register')}}">新用户注册</a>
        </div>
    </div>
</div>
</body>
@endsection
@section('my-js')
<script>
        $(function(){
            layui.use('layer',function(){
                var layer=layui.layer;
                var type=true;
                $('#img').click(function(){
                    $(this).attr('src',"{{url('verify/create')}}"+"?"+Math.random())
                })
                //验证手机号
                $('#txtAccount').blur(function(){
                    var phone=$(this).val();
                    if(!(/^1[34578]\d{9}$/.test(phone))){
                        layer.msg('手机号码有误，请重填',{icon :2});
                        type=false;
                    }else if(phone==''){
                        layer.msg('请填写手机号',{icon :2});
                        type=false;
                    }else{
                    type=true
                }
                })
                //验证密码
                $('#txtPassword').blur(function(){
                    var reg=/[a-z0-9]{6,16}/;
                    var pwd=$(this).val();
                    if(!reg.test(pwd)){
                        layer.msg('密码格式错误',{icon :2});
                        type=false;
                    }else if(pwd==''){
                            layer.msg('请填写密码',{icon :2});
                            type=false;
                    }else{
                        type=true;
                    }
                })
                //阻止提交
                $('#btnLogin').click(function(){
                    var phone=$('#txtAccount').val();
                    var pwd=$('#txtPassword').val();
                    var  verifycode=$('#verifycode').val();
                    if(phone==''){
                        layer.msg('电话不能为空',{icon :2});
                        type=false;
                    }else if(pwd==''){
                        layer.msg('密码不能为空',{icon :2});
                        type=false;
                    }
                        if(type==false){
                            return false;
                        }else{

                        var _token=$('#_token').val();
                        $.post(
                        "{{'logindo'}}",
                        {username:phone,pwd:pwd,_token:_token,verifycode:verifycode},
                        function(res){
                            if(res==1){
                                layer.msg('登陆成功',{icon:1,time:3000},function(){
                                    location.href="{{url('/')}}"
                                });
                            }else if(res==4){
                                layer.msg('验证码错误',{icon:2});
                            }else{
                                layer.msg('账号或密码错误',{icon:2});
                            }
                        }
                        )
                        }
                })
            })
        })
</script>
@endsection
