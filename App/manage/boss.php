<?php
class boss extends m_smarty {
    function __construct()
    {
        parent::__construct();
        $this->db=new db('boss');
    }
    function index(){
        $this->smarty->display('view/manage_boss_add.html');
    }
    function add(){
        $rows=$this->db->insertInto($_POST);
        if ($rows==1){
            echo 'ok';
        }else if ($rows<0){
            echo 'error';
        }
    }
    function show(){
        $this->smarty->display('view/boss_show.html');
    }
    function update(){
        $this->db->update($_POST);
    }
}