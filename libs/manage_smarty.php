<?php

class manage_smarty{
    function __construct()
    {
        $this->smarty=new Smarty();
        $this->smarty->setTemplateDir('App');
        $this->smarty->setCompileDir('compile');
    }
    ///////////检查登陆状态////////////////
    function checkLogin(){
        session_start();
        if (isset($_SESSION['isLogin'])){
            return true;
        }
        return false;
    }
}