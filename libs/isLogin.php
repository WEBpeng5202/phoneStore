<?php
/*
 * 处理是否处于登陆状态
 *
 * */
session_start();
if(!isset($_SESSION['isLogin'])){
    $message='请登录！即将返回登陆页！';
    include "App/m/message.html";
    exit();
}