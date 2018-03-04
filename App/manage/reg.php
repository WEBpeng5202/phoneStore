<?php

/*
 *    ‘我的’-模块
 * 登录
 * 注册 提交
 * 个人信息展示
 * 订单信息跳转
 *
 * */

class reg extends index_smarty
{
    function __construct()
    {
        parent::__construct();
        $this->mysql = new db('Register');
    }
//////////////打开 前台登录页面 模块///////////////
    function loginShow()
    {
        $this->smarty->display('view/index_login.html');
    }

//////////////登录 验证 模块///////////////
    function reg()
    {
        $regname = $_POST['regname'];
        $regpsd = md5($_POST['regpsd']);
        $data = $this->mysql->select('*');
        for ($i = 0; $i < count($data); $i++) {
            if ($data[$i]['regname'] == $regname) {
                if ($data[$i]['regpsd'] == $regpsd) {
                    session_start();
                    $_SESSION['isLogin'] = 'yse';
                    $_SESSION['rid'] = $data[$i]['rid'];
                    $_SESSION['user'] = $data[$i]['regname'];
                    echo 'success';
                    exit();
                } else {
                    echo '密码错误';
                    exit();
                }
            }
        }
        echo 'error';
        exit();
    }

//////////////打开 注册页面 模块///////////////
    function register()
    {
        $this->smarty->display('view/index_register.html');
    }

//////////////注册 提交 模块///////////////
    function index()
    {
        $rows = $this->mysql->insertInto($_POST);
        if ($rows === 1) {
            echo 'ok';
        } else if ($rows < 0) {
            echo 'error';
        }
    }

//////////////打开 我的页面 模块///////////////
    function my()
    {
        if ($this->checkLogin()) {
            $rid = $_SESSION['rid'];
            $user = $this->mysql->where('rid=' . $rid)->select("*")[0];
            $this->smarty->assign('user', $user);
            $this->smarty->display('view/index_self.html');
        } else {
            $this->smarty->display('view/index_login.html');
        }

    }

}
