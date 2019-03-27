<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tools\alipay\wappay\service\AlipayTradeService;
use App\Tools\alipay\wappay\buildermodel\AlipayTradeWapPayContentBuilder;
use App\Model\Goods;
class PayController extends Controller
{
    //手机支付
    public function mobilepay(Request $request)
    {
        header("Content-type: text/html; charset=utf-8");
        $goods_id=$request->id;
        $arr=Goods::where('goods_id',$goods_id)->first();
        $config=config('ali');

            //商户订单号，商户网站订单系统中唯一订单号，必填
            $out_trade_no = date("Ymdhis").rand(1000,9999);

            //订单名称，必填
            $subject = $arr['goods_name'];

            //付款金额，必填
            $total_amount = $arr['self_price'];

            //商品描述，可空
            $body = NULL;

            //超时时间
            $timeout_express="1m";

            $payRequestBuilder = new AlipayTradeWapPayContentBuilder();
            $payRequestBuilder->setBody($body);
            $payRequestBuilder->setSubject($subject);
            $payRequestBuilder->setOutTradeNo($out_trade_no);
            $payRequestBuilder->setTotalAmount($total_amount);
            $payRequestBuilder->setTimeExpress($timeout_express);

            $payResponse = new AlipayTradeService($config);
            $result=$payResponse->wapPay($payRequestBuilder,$config['return_url'],$config['notify_url']);

            dd($result);
        }
    //同步回调
    public function re()
    {
        echo 1;
    }
    //异步回调
    public function notify()
    {
        echo 2;
    }
}
