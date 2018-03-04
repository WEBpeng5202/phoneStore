<?php

class goods extends manage_smarty
{
    function __construct()
    {
        parent::__construct();
        $this->mysql=new db('goods');
    }

    function index()
    {
        $this->db = new db('category');
        $one = $this->db->select('*');
        $two = $this->db->where("pid=0")->select('*');
        $num=count($one)-count($two);
        $data = $this->db->limit('10,'.$num)->select('*');
        $this->smarty->assign('data', $data);
        $this->smarty->display('view/manage_goods_add.html');
    }

    function add()
    {
        $this->db = new db('goods');
        $rows = $this->db->insertInto($_POST);
        if ($rows == 1) {
            echo 'ok';
        } else if ($rows < 0) {
            echo 'error';
        }
    }
    function show(){
        $data=$this->mysql->select('*');
        $arr=[];
        for($i=0;$i<count($data);$i++){
            array_push($arr,explode(',',$data[$i]['gimage']));
        }
        $num=count($data)-1;
        $this->smarty->assign('arr',$arr);
        $this->smarty->assign('num',$num);
        $this->smarty->assign('data',$data);
        $this->smarty->display('view/manage_goods_show.html');
    }
    function update(){
        $this->db = new db('category');
        $data1 = $this->db->where('pid=0')->select('*');
        $gid=$_GET['gid'];
        $data=$this->mysql->where('gid='.$gid)->select('*')[0];
        $this->smarty->assign('data', $data);
        $this->smarty->assign('data1', $data1);
        $this->smarty->assign('gid', $gid);
        $this->smarty->display('view/manage_goods_update.html');
    }
    function updateTo(){
        $gid=$_GET['gid'];
        $rows=$this->mysql->where('gid='.$gid)->update($_POST);

        if ($rows==1){
            echo 'ok';
        }else if ($rows<0){
            echo 'error';
        }

    }
    function delete(){
        $gid=$_GET['gid'];
        $this->mysql->delete("gid=$gid");
        $this->show();
    }

}