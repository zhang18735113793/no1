@extends('must')
@section('title','添加收货地址')
@section('content')
    <body>
    <!--触屏版内页头部-->
    <div class="m-block-header" id="div-header">
        <strong id="m-title">填写收货地址</strong>
        <a href="javascript:history.back();" class="m-back-arrow"><i class="m-public-icon"></i></a>
        <a href="javascript:;" class="m-index-icon" id="save">保存</a>
    </div>
    <div class=""></div>
    <!-- <form class="layui-form" action="">
      <input type="checkbox" name="xxx" lay-skin="switch">

    </form> -->
    <form class="layui-form" action="">
        <input type="hidden" id="_token" name="_token" value="<?php echo csrf_token(); ?>">
        <div class="addrcon">
            <ul>
                <li><em>收货人</em><input type="text" name="address_name" id="address_name" placeholder="请填写真实姓名"></li>
                <li><em>手机号码</em><input type="number" name="address_tel" id="address_tel" placeholder="请输入手机号"></li>
                <li><em>所在区域</em><input id="demo1" type="text"  name="address_area" id="address_area" placeholder="请选择所在区域"></li>
                <li class="addr-detail"><em>详细地址</em><input type="text" placeholder="20个字以内" name="address_desc" id="address_desc" class="addr"></li>
            </ul>
            <div class="setnormal"><span>设为默认地址</span><input type="checkbox" name="checked" id ="checked" lay-skin="switch">  </div>
        </div>
    </form>
    </body>
@endsection
@section('my-js')
    <!-- SUI mobile -->
    <script>
        //Demo
        layui.use('form', function(){
            var form = layui.form();

            //监听提交
            form.on('submit(formDemo)', function(data){
                layer.msg(JSON.stringify(data.field));
                return false;
            });
        });
        var area = new LArea();
        area.init({
        'trigger': '#demo1',//触发选择控件的文本框，同时选择完毕后name属性输出到该位置
        'valueTo':'#value1',//选择完毕后id属性输出到该位置
        'keys':{id:'id',name:'name'},//绑定数据源相关字段 id对应valueTo的value属性输出 name对应trigger的value属性输出
        'type':1,//数据源类型
        'data':LAreaData//数据源
        });
</script>
    <script>
        $(function(){
            $(document).on('click',"#save",function () {
                var obj={};
                obj.address_name = $("#address_name").val();
                obj.address_tel = $("#address_tel").val();
                obj.address_desc = $("#address_desc").val();
                obj.area = $("#address_area").val();
                var checked = $("#checked").prop('checked');
                var _token = $("#_token").val();
                if(checked==true){
                    obj.is_default = 1;
                }else{
                    obj.is_default = 2;
                }
                $.post(
                    "{{url('IndexController/writeaddrdo')}}",
                    {obj:obj,_token:_token},
                    function(res){
                        if(res==1){
                            layer.msg('加入地址成功',{time:2000},function(){
                                location.href="{{url('IndexController/address')}}";
                            });
                        }else{
                            layer.msg('加入地址失败', {icon: 2});
                        }
                    }
                )
            })
        })
    </script>

    @endsection
</body>
</html>
