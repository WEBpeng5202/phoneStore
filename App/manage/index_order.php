<?php

class index_order extends index_smarty
{
    function __construct()
    {
        parent::__construct();
        $this->mysql = new db('orderform');
        $this->db = new db('order_attach');
        $this->goods = new db('goods');
    }

    function add()
    {
        $data = $_GET['data'];
        session_start();
        $rid = $_SESSION['rid'];
        $date = time();
        $sql = "insert into orderform (rid,fpro) VALUES ($rid,$date)";
        $row = $this->mysql->insertInto($sql);
        if ($row == 1) {
            $fid = $this->mysql->db->insert_id;
            $sql1 = "insert into order_attach (gid,totalnum,fid) VALUES ";
            foreach ($data as $v) {
                $sql1 .= "('" . $v['gid'] . "','" . $v['num'] . "'," . $fid . "),";
            }
            $sql1 = substr($sql1, 0, -1);
            $this->db->insertInto($sql1);
            echo $fid;
        }
    }

    function addList()
    {
        $fid = $_GET['fid'];
        $data1 = $this->db->where("fid=" . $fid)->select("*");
        $arr = [];
        foreach ($data1 as $v) {
            $data = $this->goods->where("gid=" . $v['gid'])->select("*")[0];
            array_push($arr, $data);
        }
        $adr=new db('adress');
        $data=$adr->where("atab='on'")->select("*")[0];
        $this->smarty->assign('goods', $arr);
        $this->smarty->assign('num', $data1);
        $this->smarty->assign('adr', $data);
        $this->smarty->assign('fid', $fid);
        $this->smarty->display('view/index_balance.html');
    }
}