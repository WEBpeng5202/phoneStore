<?php
/*
 * 模块名称：路由模块
 * 模块功能：各个功能模块调用中转站
 * 默认文件地址：
 * 默认类名称
 * 默认方法名
 * */
class router
{
    static function index()
    {
        if (!isset($_SERVER['PATH_INFO']) || $_SERVER['PATH_INFO']=='/'){
            $model='login';
            $fn='index';
        }else{
            $info=explode('/',substr($_SERVER['PATH_INFO'],1));
            $model=$info[0];
            $fn=isset($info[1])&&$info[1]?$info[1]:'index';
        }

        if (file_exists('App/manage/'.$model.'.php')){
            include 'App/manage/'.$model.'.php';
            if (class_exists($model)){
                $obj=new $model();
                if(method_exists($obj,$fn)){
                    $obj->$fn();
                }else{
                    $message=$model.'类中不存在'.$fn.'方法！';
                    include 'App/view/404.html';
                }
            }else{
                $message='文件中不存在该'.$model.'类！';
                include 'App/view/404.html';
            }
        }else{
            $message=$model.'文件不存在！';
            include 'App/view/404.html';
        }
    }
}