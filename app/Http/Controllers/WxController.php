<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class WxController extends Controller
{
    public function index()
    {
        $this->responseMsg();
//        $echostr=$_GET['echostr'];
//        if($this->signature()){
//            echo $echostr;exit;
//        }
    }

    public function responseMsg()
    {
        $poststr=file_get_contents("php://input");
        $postobj=simplexml_load_string($poststr,SimpleXMLElement,lIBXML_NOCDATA);
        $str="<xml>
                  <ToUserName><![CDATA[toUser]]></ToUserName>
                  <FromUserName><![CDATA[FromUser]]></FromUserName>
                  <CreateTime>123456789</CreateTime>
                  <MsgType><![CDATA[event]]></MsgType>
                  <Event><![CDATA[subscribe]]></Event>
                  <Content><![CDATA[%s]]></Content>
               </xml>";
        $toUserName=$postobj->ToUserName;
        $fromUserName=$postobj->FromUserName;
        $time=time();
        $msgtype="text";
        if($postobj->MsgType=='event'){
            if($postobj->Event=='subscribe'){
                $content="欢迎来到我的订阅号";
                $res=sprintf($str,$toUserName,$fromUserName,$time,$msgtype,$content);
                echo $res;exit;
            }
        }
    }
    private function signature()
    {
        $signature=$_GET['signature'];
        $timestamp=$_GET['timestamp'];
        $nonce=$_GET['nonce'];
        $token=env("WEIXINTOKEN");
        $tmpArr=array($token,$timestamp,$nonce);
        sort($tmpArr,SORT_STRING);
        $tmpStr=implode($tmpArr);
        $sign=sha1($tmpStr);
        if($sign==$signature){
            return true;
        }else{
            return false;
        }
    }
}
