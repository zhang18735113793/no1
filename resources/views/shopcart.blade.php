@extends('must')
@section('title','buycar')
@section('content')
<body id="loadingPicBlock" class="g-acc-bg">
    <input name="hidUserID" type="hidden" id="hidUserID" value="-1" />
    <div>
        <!--首页头部-->
        <div class="m-block-header">
            <a href="/" class="m-public-icon m-1yyg-icon"></a>
            <a href="/" class="m-index-icon">编辑</a>
        </div>
        <!--首页头部 end-->
        <div class="g-Cart-list">
            <ul id="cartBody">
                @foreach($goods as $v)
                <li>
                    <s class="xuan current" goods_price="{{$v->self_price}}" goods_id="{{$v->goods_id}}"></s>
                    <a class="fl u-Cart-img" href="{{url('IndexController/shopcontent')}}/{{$v->goods_id}}">
                        <img src="/uploads/{{$v->goods_img}}" border="0" alt="">
                    </a>
                    <div class="u-Cart-r">
                        <a href="{{url('IndexController/shopcontent')}}/{{$v->goods_id}}" class="gray6">{{$v->goods_name}}</a>
                        <span class="gray9">
                            <em>剩余124人次</em>
                        </span>
                        <div class="num-opt" goods_id="{{$v->goods_id}}">
                            <em class="num-mius dis min"><i></i></em>
                            <input class="text_box" name="num" maxlength="6" type="text" value="{{$v->buy_num}}" codeid="12501977">
                            <em class="num-add add"><i></i></em>
                        </div>
                        <a href="javascript:;" name="delLink" cid="12501977" isover="0" class="z-del"><s class="delcart" goods_id="{{$v->goods_id}}"></s></a>
                    </div>    
                </li>
                    @endforeach
            </ul>
            <div id="divNone" class="empty "  style="display: none"><s></s><p>您的购物车还是空的哦~</p><a href="https://m.1yyg.com" class="orangeBtn">立即潮购</a></div>
        </div>
        <div id="mycartpay" class="g-Total-bt g-car-new" style="">
            <dl>
                <dt class="gray6">
                    <s class="quanxuan current"></s>全选
                    <p class="money-total">合计<em class="orange "><span>￥{{$price}}</span></em></p>

                </dt>
                <dd>
                    <a href="javascript:;" id="a_payment" class="orangeBtn w_account remove">删除</a>
                    <a href="javascript:;" id="a_payment" class="orangeBtn w_account payment">去结算</a>
                </dd>
            </dl>
        </div>
        <div class="hot-recom">
            <div class="title thin-bor-top gray6">
                <span><b class="z-set"></b>人气推荐</span>
                <em></em>
            </div>
            <div class="goods-wrap thin-bor-top">
                <ul class="goods-list clearfix">
                    @foreach($sendgoods as $v)
                    <li>
                        <a href="{{url('IndexController/shopcontent')}}/{{$v->goods_id}}" class="g-pic">
                            <img src="/uploads/{{$v->goods_img}}" width="136" height="136">
                        </a>
                        <p class="g-name">
                            <a href="{{url('IndexController/shopcontent')}}/{{$v->goods_id}}">{{$v->goods_name}}</a>
                        </p>
                        <ins class="gray9">价值:￥{{$v->self_price}}</ins>
                        <div class="btn-wrap">
                            <div class="Progress-bar">
                                <p class="u-progress">
                                    <span class="pgbar" style="width:1%;">
                                        <span class="pging"></span>
                                    </span>
                                </p>
                            </div>
                            <div class="gRate" goods_id="{{$v->goods_id}}"  data-productid="23458">
                                <a href="javascript:;"><s></s></a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>


        <input type="hidden" name="_token" id="_token" value="<?php echo csrf_token()?>">

<div class="footer clearfix">
    <ul>
        <li class="f_home"><a href="{{url('/')}}" ><i></i>潮购</a></li>
        <li class="f_single"><a href="/v41/post/index.do" ><i></i>晒单</a></li>
        <li class="f_car"><a id="btnCart" href="{{url('IndexController/buycar')}}" class="hover"><i></i>购物车</a></li>
        <li class="f_personal"><a href="{{url('IndexController/userpage')}}" ><i></i>我的潮购</a></li>
    </ul>
</div>



</body>
</html>
@endsection
@section('my-js')
    <!---商品加减算总数---->
    <script type="text/javascript">

    </script>
    <script>
        // 全选
        $(".quanxuan").click(function () {
            if($(this).hasClass('current')){
                $(this).removeClass('current');

                $(".g-Cart-list .xuan").each(function () {
                    if ($(this).hasClass("current")) {
                        $(this).removeClass("current");
                    } else {
                        $(this).addClass("current");
                    }
                });

            }else{
                $(this).addClass('current');

                $(".g-Cart-list .xuan").each(function () {
                    $(this).addClass("current");
                    // $(this).next().css({ "background-color": "#3366cc", "color": "#ffffff" });
                });
                GetCount();
            }
            GetCount();
        });
        // 单选
        $(".g-Cart-list .xuan").click(function () {
            if($(this).hasClass('current')){
                $(this).removeClass('current');
            }else{
                $(this).addClass('current');
            }
            if($('.g-Cart-list .xuan.current').length==$('#cartBody li').length){
                $('.quanxuan').addClass('current');

            }else{
                $('.quanxuan').removeClass('current');
            }
            GetCount();
            // $("#total2").html() = GetCount($(this));
            //alert(conts);
        });
        // 已选中的总额
        function GetCount() {
            var conts = 0;
            var aa = 0;
            $(".g-Cart-list .xuan").each(function () {
                if ($(this).hasClass("current")) {
                    for (var i = 0; i < $(this).length; i++) {
                        var buy_number=$(this).siblings("div[class='u-Cart-r']").find("input[class='text_box']").val();
                        conts += parseInt($(this).attr('goods_price')*buy_number);
                        // aa += 1;
                    }
                }
            });

            $(".orange").html('<span>￥</span>'+(conts).toFixed(2));
        }

    </script>
    <script>
        $(function(){
            layui.use('layer',function(){
                var layer=layui.layer;
                var _token=$('#_token').val();
                //点击+
                $(".add").click(function () {
                    var t = $(this).prev();
                    t.val(parseInt(t.val()) + 1);
                    var num=t.val();
                    var goods_id=$(this).parent('div').attr('goods_id');
                    $.post(
                        "{{url('IndexController/updatecart')}}",
                        {num:num,goods_id:goods_id,_token:_token},
                        function(res){
                            if(res==1){
                                location.href="{{url('IndexController/buycar')}}";
                            }else{
                                layer.msg('修改失败',{icon:2});
                            }
                        }
                    )
                })
                //点击-
                $(".min").click(function () {
                    var t = $(this).next();
                    if(t.val()>1){
                        t.val(parseInt(t.val()) - 1);
                        var num=t.val();
                        var goods_id=$(this).parent('div').attr('goods_id');
                        $.post(
                            "{{url('IndexController/updatecart')}}",
                            {num:num,goods_id:goods_id,_token:_token},
                            function(res){
                                if(res==1){
                                    location.href="{{url('IndexController/buycar')}}";
                                }else{
                                    layer.msg('修改失败',{icon:2});
                                }
                            }
                        )
                    }
                })
                //添加购物车
                $(document).on('click','.gRate',function(){
                    var goods_id=$(this).attr('goods_id');
                    var _token=$('#_token').val();
                    $.post(
                        "{{url('IndexController/cartadd')}}",
                        {goods_id:goods_id,_token:_token},
                        function(res){
                            if(res==1){
                                layer.msg('添加购物车成功',{icon:1,time:3000},function(){
                                    history.go(0);
                                })
                            }else if(res==2){
                                layer.msg('添加购物车失败',{icon:2})
                            }else if(res==3){
                                layer.msg('请先登录',{icon:2,time:3000},function(){
                                    location.href="{{url('IndexController/login')}}"
                                })
                            }
                        }
                    )
                })
                //点击删除按钮
                $(document).on('click','.delcart',function(){
                    var goods_id=$(this).attr('goods_id');
                    var _token=$('#_token').val();
                    $.post(
                        "{{url('IndexController/delcart')}}",
                        {goods_id:goods_id,_token:_token,type:1},
                        function(res){
                           if(res==1){
                               layer.msg('删除成功',{icon:1,time:3000},function(){
                                   history.go(0);
                               })
                           }else{
                               layer.msg('删除失败',{icoon:2})
                           }
                        }
                    )
                })
                //点击批量删除
                $(document).on('click','.remove',function () {
                    var goods_id='';
                    $(".g-Cart-list .xuan").each(function () {
                        if ($(this).hasClass("current")) {
                            for (var i = 0; i < $(this).length; i++) {
                                goods_id += parseInt($(this).attr('goods_id'))+',';
                                // aa += 1;
                            }
                        }
                    });
                    goods_id=goods_id.substr(0,goods_id.length-1);
                    $.post(
                        "{{url('IndexController/delcart')}}",
                        {goods_id:goods_id,_token:_token,type:2},
                        function(res){
                            if(res==1){
                                layer.msg('删除成功',{icon:1,time:3000},function(){
                                    history.go(0);
                                })
                            }else{
                                layer.msg('删除失败',{icoon:2})
                            }
                        }
                    )
                })
                //点击结算
                $(document).on('click','.payment',function(){
                    var goods_id='';

                    $(".g-Cart-list .xuan").each(function () {
                        if ($(this).hasClass("current")) {

                            for (var i = 0; i < $(this).length; i++) {
                                goods_id += parseInt($(this).attr('goods_id'))+',';

                                // aa += 1;
                            }
                        }
                    });
                    goods_id=goods_id.substr(0,goods_id.length-1);
                    $.post(
                        "{{url('IndexController/payment')}}",
                        {goods_id:goods_id,_token:_token},
                        function(res){
                            location.href="{{url('IndexController/paymentshow')}}";
                        }
                    )
                })

            })
        })
    </script>
@endsection