<?php

class login extends manage_smarty
{
    function __construct()
    {
        parent::__construct();
        $this->db = new db('manger');
    }

///////打开登录页////////
    function code(){
        $RegImg = new code(200, 60, '4');
        $RegImg->outPut();
        session_start();
        $_SESSION['code'] = strtolower($RegImg->code);
    }
    function index()
    {
        $this->smarty->display('view/manage_login.html');
    }
//////登陆验证//////////
    function check()
    {
//        $data = $this->db->select('select * from manger');
        $data = $this->db->select("username,password");
//        var_dump(count($data));
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $code=$_POST['code'];
        session_start();
        if ($_SESSION['code']== $code){
            for ($i = 0; $i < count($data); $i++) {
                if ($data[$i]['username'] == $username) {
                    if ($data[$i]['password'] == $password) {
                        $_SESSION['isLogin']='yes';
                        $_SESSION['username']=$username;
                        echo 'success';
                        exit();
                    } else if ($data[$i]['password']!=$password){
                        echo 'psderror';
                        exit();
                    }
                }
            }
            echo 'usernameerror';
            exit();
        }else{
            echo 'regerror';
            exit();
        }
    }
}