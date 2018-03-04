<?php

class index_shop extends index_smarty
{
    function __construct()
    {
        parent::__construct();
        $this->mysql = new db('shopCar');
    }

///////////////////打开购物车页面/////////////////
    function index()
    {
        if ($this->checkLogin()) {
            $rid = $_SESSION['rid'];
            $userShop = $this->mysql->select("select goods.*,shopCar.num from goods,shopCar where goods.gid=shopCar.gid AND rid=$rid");
            $this->smarty->assign('userShop', $userShop);
            $this->smarty->display('view/index_shop_self.html');
        } else {
            $this->smarty->display('view/index_shop.html');
        }
    }

////////////////添加商品到 购物车表 ////////////////////
    function add()
    {
        $gid = $_POST['gid'];
        session_start();
        $rid = $_SESSION['rid'];
        $snumber = time();
        $data = $this->mysql->where("gid=$gid and rid=$rid")->select('*');
        if (count($data) === 0) {
            $sql = "insert into shopCar (gid,rid,num,snumber) VALUES ({$gid},{$rid},1,'$snumber')";
            echo $rows = $this->mysql->insertInto($sql);
        } else {
            $num = $data[0]['num'] + 1;
            echo $rows = $this->mysql->update("update shopCar set num=$num WHERE gid=$gid and rid=$rid");
        }
    }

    ////////////////操作商品数量更新数据库数据///////////////////
    function reduceGoods()
    {
        session_start();
        $rid = $_SESSION['rid'];
        $gid = $_GET['gid'];
        $number = $_GET['number'];
        $sql = "update shopCar set num=$number WHERE gid=$gid AND rid=$rid";
        $row = $this->mysql->update($sql);
        echo $row;
    }
    function deleteGoods(){
        session_start();
        $rid=$_SESSION['rid'];
        $gid=$_GET['gid'];
        $row=$this->mysql->delete("rid=$rid AND gid=$gid");
        echo $row;
    }


///////////////打开订单结算页面///////////////////
    function balance()
    {

    }
}