<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>潮购记录</title>
    <meta content="app-id=984819816" name="apple-itunes-app" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, maximum-scale=1.0" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link href="{{url('css/comm.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{url('css/buyrecord.css')}}">
   
    
</head>
<body>
    
<!--触屏版内页头部-->
<div class="m-block-header" id="div-header">
    <strong id="m-title">潮购记录</strong>
    <a href="javascript:history.back();" class="m-back-arrow"><i class="m-public-icon"></i></a>
    <a href="/" class="m-index-icon"><i class="buycart"></i></a>
</div>
<input type="hidden" name="_token" id="_token" value="<?php echo csrf_token()?>">
@if($data!='')
<div class="recordwrapp">

    <div class="buyrecord-con clearfix">
        @foreach($data as $v)
        <div class="record-img fl">
            <img src="\uploads\{{$v->goods_img}}" alt="">
        </div>
        <div class="record-con fl">
            <h3>(第<i>87390潮</i>){{$v->goods_name}}</h3>
            <p class="winner">获得者：<i>终于中了一次</i></p>
            <div class="clearfix">
                <div class="win-wrapp fl">
                    <p class="w-time">2017-06-30 11:11:11</p>
                    <p class="w-chao">第<i>23568</i>潮正在进行中...</p>
                </div>
                <div class="fr"><i class="buycart"></i></div>
            </div>
        </div>
        @endforeach
    </div>

</div>
<div class="nocontent">
    <div class="m_buylist m_get">
        <ul id="ul_list">
            <div class="noRecords colorbbb clearfix" style="display: none">
                <s class="default"></s>您还没有购买商品哦~
            </div>
            <div class="hot-recom">
                <div class="title thin-bor-top gray6">
                    <span><b class="z-set"></b>人气推荐</span>
                    <em></em>
                </div>
                <div class="goods-wrap thin-bor-top">
                    <ul class="goods-list clearfix">
                        @foreach($arr as $v)
                        <li>
                            <a href="https://m.1yyg.com/v44/products/23458.do" class="g-pic">
                                <img src="\uploads\{{$v->goods_img}}" width="136" height="136">
                            </a>
                            <p class="g-name">
                                <a href="https://m.1yyg.com/v44/products/23458.do">(第<i>368671</i>潮){{$v->goods_name}}</a>
                            </p>
                            <ins class="gray9">价值:￥{{$v->goods_price}}</ins>
                            <div class="btn-wrap">
                                <div class="Progress-bar">
                                    <p class="u-progress">
                                        <span class="pgbar" style="width:1%;">
                                            <span class="pging"></span>
                                        </span>
                                    </p>
                                </div>
                                <div class="gRate" goods_id="{{$v->goods_id}}" data-productid="23458">
                                    <a href="javascript:;"><s></s></a>
                                </div>
                            </div>
                        </li>
                            @endforeach
                    </ul>
                </div>
            </div>
        </ul>
    </div>
</div>
    @else
    <div class="nocontent">
        <div class="m_buylist m_get">
            <ul id="ul_list">
                <div class="noRecords colorbbb clearfix">
                    <s class="default"></s>您还没有购买商品哦~
                </div>
                <div class="hot-recom">
                    <div class="title thin-bor-top gray6">
                        <span><b class="z-set"></b>人气推荐</span>
                        <em></em>
                    </div>
                    <div class="goods-wrap thin-bor-top">
                        <ul class="goods-list clearfix">
                            <li>
                                <a href="https://m.1yyg.com/v44/products/23458.do" class="g-pic">
                                    <img src="https://img.1yyg.net/goodspic/pic-200-200/20160908092215288.jpg" width="136" height="136">
                                </a>
                                <p class="g-name">
                                    <a href="https://m.1yyg.com/v44/products/23458.do">(第<i>368671</i>潮)苹果（Apple）iPhone 7 Plus 128G版 4G手机</a>
                                </p>
                                <ins class="gray9">价值:￥7130</ins>
                                <div class="btn-wrap">
                                    <div class="Progress-bar">
                                        <p class="u-progress">
                                        <span class="pgbar" style="width:1%;">
                                            <span class="pging"></span>
                                        </span>
                                        </p>
                                    </div>
                                    <div class="gRate" data-productid="23458">
                                        <a href="javascript:;"><s></s></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="" class="g-pic">
                                    <img src="https://img.1yyg.net/goodspic/pic-200-200/20160908092215288.jpg" width="136" height="136">
                                </a>
                                <p class="g-name">
                                    <a href="https://m.1yyg.com/v44/products/23458.do">(第368671潮)苹果（Apple）iPhone 7 Plus 128G版 4G手机</a>
                                </p>
                                <ins class="gray9">价值:￥7130</ins>
                                <div class="btn-wrap">
                                    <div class="Progress-bar">
                                        <p class="u-progress">
                                        <span class="pgbar" style="width:45%;">
                                            <span class="pging"></span>
                                        </span>
                                        </p>
                                    </div>
                                    <div class="gRate" data-productid="23458">
                                        <a href="javascript:;"><s></s></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="https://m.1yyg.com/v44/products/23458.do" class="g-pic">
                                    <img src="https://img.1yyg.net/goodspic/pic-200-200/20160908092215288.jpg" width="136" height="136">
                                </a>
                                <p class="g-name">
                                    <a href="https://m.1yyg.com/v44/products/23458.do">(第<i>368671</i>潮)苹果（Apple）iPhone 7 Plus 128G版 4G手机</a>
                                </p>
                                <ins class="gray9">价值:￥7130</ins>
                                <div class="btn-wrap">
                                    <div class="Progress-bar">
                                        <p class="u-progress">
                                        <span class="pgbar" style="width:1%;">
                                            <span class="pging"></span>
                                        </span>
                                        </p>
                                    </div>
                                    <div class="gRate" data-productid="23458">
                                        <a href="javascript:;"><s></s></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="https://m.1yyg.com/v44/products/23458.do" class="g-pic">
                                    <img src="https://img.1yyg.net/goodspic/pic-200-200/20160908092215288.jpg" width="136" height="136">
                                </a>
                                <p class="g-name">
                                    <a href="https://m.1yyg.com/v44/products/23458.do">(第368671潮)苹果（Apple）iPhone 7 Plus 128G版 4G手机</a>
                                </p>
                                <ins class="gray9">价值:￥7130</ins>
                                <div class="btn-wrap">
                                    <div class="Progress-bar">
                                        <p class="u-progress">
                                        <span class="pgbar" style="width:1%;">
                                            <span class="pging"></span>
                                        </span>
                                        </p>
                                    </div>
                                    <div class="gRate" data-productid="23458">
                                        <a href="javascript:;"><s></s></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </ul>
        </div>
    </div>
@endif
<script src="{{url('js/jquery-1.11.2.min.js')}}"></script>
</body>
</html>
<script src="{{url('layui/layui.js')}}"></script>
<script>
    $(function(){
        layui.use('layer',function(){
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
        })

    })
</script>