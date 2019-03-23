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
});
//获取验证码图片
route::any('verify/create','CaptchaController@create');