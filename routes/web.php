<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::any('/','IndexController@index');
Route::prefix('IndexController')->group(function () {
    //所有商品
    route::any('allshops/{id?}','IndexController@allshops');
    //购物车
    route::any('buycar','IndexController@buycar');
    //我的
    route::any('userpage','IndexController@userpage');
    //商品详情页
    route::any('shopcontent/{id}','IndexController@shopcontent');
    //登陆
    route::any('login','IndexController@login');
    //登陆执行
    route::any('logindo','IndexController@logindo');
    //注册
    route::any('register','IndexController@register');
    //注册执行
    route::any('registerdo','IndexController@registerdo');
    //发送验证码
    route::any('sendcode','IndexController@sendcode');
    //添加购物车
    route::any('cartadd','IndexController@cartadd');
    //删除购物车delcart
    route::any('delcart','IndexController@delcart');
    //修改购物车
    route::any('updatecart','IndexController@updatecart');
    //结算页面
    route::any('payment','IndexController@payment');
    route::any('paymentshow','IndexController@paymentshow');
    //结算成功
    route::any('paysuccess','IndexController@paysuccess');
    //我的钱包
    route::any('mywallet','IndexController@mywallet');
    //分享
    route::any('invite','IndexController@invite');
    //找回密码
    route::any('findpwd','IndexController@findpwd');
    //管理收货地址address
    route::any('address','IndexController@address');
    //添加收货地址writeaddr
    route::any('writeaddr','IndexController@writeaddr');
    //执行添加地址
    route::any('writeaddrdo','IndexController@writeaddrdo');
    //删除地址addressdel
    route::any('addressdel','IndexController@addressdel');
    //设为默认addressdefault
    route::any('addressdefault','IndexController@addressdefault');
    //编辑收货地址addressupdate
    route::any('addressupdate/{id}','IndexController@addressupdate');
    //编辑收货地址执行addressupdatedo
    route::any('addressupdatedo','IndexController@addressupdatedo');
    //购买记录buyrecord
    route::any('buyrecord','IndexController@buyrecord');
    //设置
    route::any('set','IndexController@set');
    //安全设置
    route::any('safeset','IndexController@safeset');
    //修改登陆密码
    route::any('loginpwd','IndexController@loginpwd');
    //修改登陆密码执行
    route::any('loginpwdup','IndexController@loginpwdup');
    //个人资料
    route::any('edituser','IndexController@edituser');
    //修改昵称
    route::any('nicknamemodify','IndexController@nicknamemodify');
    //修改昵称执行
    route::any('editname','IndexController@editname');
    //退出登陆
    route::any('getout','IndexController@getout');
});
//获取验证码图片
route::any('verify/create','CaptchaController@create');