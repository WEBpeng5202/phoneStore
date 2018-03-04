<?php
include "libs/isLogin.php";
class catemanage extends manage_smarty
{
    function __construct()
    {
        parent::__construct();
        $this->tabelName = 'category';
        $this->db = new db('category');
    }

    function index()
    {
        $obj = new unit();
        $str = $obj->cateTree($this->db->db, 0, 0, 'category');
        $this->smarty->assign('str', $str);
        $this->smarty->display('view/manage_cate_add.html');
    }

    function add()
    {
        $rows = $this->db->insertInto($_POST);
        if ($rows == 1) {
            echo 'ok';
        } else {
            echo 'error';
        }
    }

    function show()
    {
        $str = $this->db->select('*');
        $this->smarty->assign('str', $str);
        $this->smarty->display('view/manage_cate_show.html');
    }

    function delete()
    {
        $cid = $_POST['cid'];
        $rows = $this->db->delete("cid=$cid");
        if ($rows == 1) {
            echo 'ok';
        } else {
            echo 'error';
        }
    }

    function update()
    {
        $rows = $this->db->update("update category set {$_POST['type']}='{$_POST['val']}' where cid={$_POST['cid']}");
        if ($rows == 1) {
            echo 'success';
        } else if ($rows < 0) {
            echo 'fail';
        }
    }
}