<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class WxController extends Controller
{
    public function index()
    {
        $echostr=$_GET['echostr'];
        if($this->signature()){
            echo $echostr;exit;
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
