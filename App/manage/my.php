<?php

class my extends index_smarty
{
    function __construct()
    {
        parent::__construct();
    }

    ////////////收货地址列表///////////////////
    function Adr()
    {
        $fid = $_GET['fid'];
        session_start();
        $rid = $_SESSION['rid'];
        $db = new db('adress');
        $data = $db->where("rid=$rid")->select("*");
        $this->smarty->assign('adr', $data);
        $this->smarty->assign('fid', $fid);
        $this->smarty->display('view/index_Adr.html');
    }

    ///////////新增收货地址页面////////////////
    function adrAdd()
    {
        $fid = $_GET['fid'];
        $this->smarty->assign('fid', $fid);
        $this->smarty->display('view/index_adrAdd.html');
    }

    ////////////收货地址添加/////////////////
    function add()
    {
        $adr = new db('adress');
        session_start();
        $rid = $_SESSION['rid'];
        if (!isset($_POST['atab'])) {
            $row = $adr->insertInto("insert into adress (adress, aname, atel, acity, rid
) VALUES ('{$_POST['adress']}','{$_POST['aname']}','{$_POST['atel']}','{$_POST['acity']}',$rid)");
            echo $row;
            exit();
        } else {
            $row = $adr->insertInto("insert into adress (atab, adress, aname, atel, acity, rid) VALUES ('{$_POST['atab']}','{$_POST['adress']}','{$_POST['aname']}','{$_POST['atel']}','{$_POST['acity']}',$rid)");
            echo $row;
        }


    }

    ////////////收货地址跳转////////////////
    function edit()
    {
        $fid = $_GET['fid'];
        $aid = $_GET['aid'];
        $order = new db('order_attach');
        $data1 = $order->where("fid=" . $fid)->select("*");
        $arr = [];
        $goods = new db('goods');
        session_start();
        $rid = $_SESSION['rid'];
        foreach ($data1 as $v) {
            $data = $goods->where("gid=" . $v['gid'])->select("*")[0];
            array_push($arr, $data);
        }
        $db = new db('adress');
        $data = $db->where("aid=$aid")->select("*")[0];
        $db->update("update adress set atab='off' WHERE rid=$rid AND atab='on'");
        $db->update("update adress set atab='on' where aid=$aid");
        $this->smarty->assign('adr', $data);
        $this->smarty->assign('goods', $arr);
        $this->smarty->assign('num', $data1);
        $this->smarty->assign('fid', $fid);
        $this->smarty->display('view/index_balance.html');
    }

    /////////////设置 跳转 模块////////////////
    function setMenu()
    {
        $this->smarty->display('view/index_setting.html');
    }

    function setAdr()
    {
        session_start();
        $rid = $_SESSION['rid'];
        $db = new db('adress');
        $data = $db->where("rid=$rid")->select("*");
        $this->smarty->assign('adr', $data);
        $this->smarty->display('view/index_setAdr.html');
    }

    function sadrAdd()
    {
        $this->smarty->display('view/index_sadrAdd.html');
    }
    ////////////收货地址修改页面跳转//////////////
    function update()
    {
        $aid = $_GET['aid'];
        $adr = new db('adress');
        $data = $adr->where("aid=$aid")->select("*")[0];
        $this->smarty->assign('data', $data);
        $this->smarty->display('view/index_adrupdate.html');
    }

    /////////////收货地址修改-数据库//////////////////
    function sqlUpdate()
    {
        $adr = new db('adress');
        $aid = $_GET['aid'];
        session_start();
        $rid = $_SESSION['rid'];
        if (!isset($_GET['atab'])) {
            $row = $adr->update("update adress set aname='{$_GET['aname']}',atel='{$_GET['atel']}',acity='{$_GET['acity']}',adress='{$_GET['adress']}' where aid=$aid");
            echo $row;
            exit();
        } else {
            $adr->update("update adress set atab='off' WHERE rid=$rid AND atab='on'");
            $row = $adr->update("update adress set atab='on',aname='{$_GET['aname']}',atel='{$_GET['atel']}',acity='{$_GET['acity']}',adress='{$_GET['adress']}' where aid=$aid");
            echo $row;
        }
    }
    /////////////收货地址删除功能(从数据库中删除)////////////////////
    function deleteAdr(){
        $adr = new db('adress');
        $aid=$_GET['aid'];
        $row=$adr->delete("aid=$aid");
        echo $row;
    }
}