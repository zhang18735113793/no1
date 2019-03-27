<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>晒单</title>
    <meta content="app-id=984819816" name="apple-itunes-app" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, maximum-scale=1.0" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link href="{{url('css/comm.css')}}" rel="stylesheet" type="text/css" />
    
    <link rel="stylesheet" href="{{url('acss/common.css')}}">
    <link rel="stylesheet" href="{{url('acss/index.css')}}">
    <link rel="stylesheet" href="{{url('css/willshare.css')}}">

    <script src="{{url('js/zepto.js')}}" charset="utf-8"></script>
    <script src="{{url('js/imgUp.js')}}"></script>
   
    
</head>
<body>
<form action="{{url('IndexController/shar')}}" method="post" enctype="multipart/form-data">

    <input type="hidden" id="goods_id" value="{{$goods->goods_id}}">
    <input type="hidden" id="_token" value="<?php echo csrf_token()?>">
<!--触屏版内页头部-->
<div class="m-block-header" id="div-header">
    <strong id="m-title">晒单</strong>
    <a href="javascript:history.back();" class="m-back-arrow"><i class="m-public-icon"></i></a>
    <a href="javascript:;" class="m-index-icon" id="sub">提交</a>
</div>
<div class="sharecon">
  <div class="shareimg clearfix">
    <img src="/uploads/{{$goods->goods_img}}" alt="">
    <span>{{$goods->goods_name}}</span>
  </div>
  <div class="sharecontent">
    <input type="text" class="shartitle" placeholder="请输入标题">
    <textarea name="" id="" cols="30" rows="10" class="sharcontent" placeholder="来吧，表达一下您激动的心情"></textarea>
  </div>
  {{--<div class="z_photo upimg-div clear">--}}
     {{--<section class="z_file fl">--}}
      {{--<img src="{{url('images/upload.png')}}" class="add-img">--}}

      {{--<input type="file" name="file" id="file" class="file" value="" accept="image/jpg,image/jpeg,image/png,image/bmp" multiple="">--}}

     {{--</section>--}}
  {{--</div>--}}
</div>
</form>

<script src="{{url('js/jquery-1.11.2.min.js')}}"></script>
<script src="{{url('layui/layui.js')}}"></script>
</body>
</html>
<script>
    $(function(){
        layui.use('layer',function(){
            var layer=layui.layer;
            var type=false;
            $('.shartitle').blur(function(){
                var shartitle=$(this).val();
                if(shartitle==''){
                    layer.msg("标题不能为空",{icon:2})
                    type=false;
                }else{
                    type=true;
                }
            })
            $('.sharcontent').blur(function(){
                var sharcontent=$(this).val();
                if(sharcontent==''){
                    layer.msg("内容不能为空",{icon:2})
                    type=false;
                }else{
                    type=true;
                }
            })
            $('#sub').click(function(){
                if(type==false){
                    return false;
                }else{
                    var shartitle=$('.shartitle').val();
                    var sharcontent=$('.sharcontent').val();
                    var goods_id=$('#goods_id').val();
                    var _token=$('#_token').val();
                    $.post(
                        "{{url('IndexController/shar')}}",
                        {shartitle:shartitle,sharcontent:sharcontent,goods_id:goods_id,_token:_token},
                        function(res){
                            if(res==1){
                                layer.msg("晒单成功",{icon:1,time:3000},function(){
                                    location.href="{{url('IndexController/sharedetail')}}/{{$goods->goods_id}}"
                                })
                            }else{
                                layer.msg("操作失败",{icon:2})
                            }
                        }
                    )
                }
            })
        })
    })
</script>