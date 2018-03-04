<?php

/*
 * 模块 页面 入口文件
 * */

class index extends index_smarty
{
    function __construct()
    {
        parent::__construct();
    }

//////////////打开  首页 模块///////////////
    function index()
    {
        $this->smarty->display('view/index.html');
    }

////////////////打开 列表页 模块//////////////////
    function index_list()
    {
        $db = new db('category');
        $data = $db->select("select * from category where pid=0");
        $this->smarty->assign('data', $data);
        $arr = [];
        for ($i = 1; $i <= count($data); $i++) {
            $data1 = $db->select("select * from category where pid={$i}");
            array_push($arr, $data1);
        }
        $this->smarty->assign("arr", $arr);
        $this->smarty->display("view/index_list.html");
    }

//////////////打开 商品详情 模块/////////////////
    function goods()
    {
        $mysql = new db('goods');
        $gid = $_GET['gid'];
        $data = $mysql->where("gid=$gid")->select('*')[0];
        $lunbo = explode(',', $data['gimage']);
        $this->smarty->assign('data', $data);

        $this->smarty->assign('lunbo', $lunbo);
        $this->smarty->display('view/index_detail.html');
    }

//////////////打开 商品列表 模块/////////////////
    function goodsList()
    {
        $mysql = new db('goods');
        $cid = $_GET['cid'];
        $data = $mysql->where("cid=$cid")->select('*');
        $this->smarty->assign('data', $data);
        $db = new db('category');
        $title = $db->where("cid=$cid")->select('cname')[0];
        $this->smarty->assign('title', $title);
        $this->smarty->display('view/index_liebiao.html');
    }


}