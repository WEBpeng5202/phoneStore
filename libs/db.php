<?php

class db{
    public $tableName;
    public $db;
    function __construct($tableName)
    {
        $this->tableName=$tableName;
        $this->db=new mysqli('localhost','root','','store',3306);
        $this->mysql();
        $this->wheres='';
        $this->limits='';
    }
    function mysql(){
        if ($this->db->connect_errno){
            echo '数据库连接失败，失败原因是：'.$this->db->connect_errno;
            exit();
        }
        $this->db->query('set names utf8');
    }
    function limit($info){
        $this->limits='limit '.$info;
        return $this;
    }
    function where($info){
        $this->wheres='where '.$info;
        return $this;
    }
    function select($info){
        if (strpos($info,'elect')){
            $sql=$info;
        }else{
            $sql = "select $info from $this->tableName $this->wheres $this->limits";
        }
        return $this->db->query($sql)->fetch_all(MYSQLI_ASSOC);
    }
    function insertInto($info){
        if (is_string($info) && stripos($info,'nsert')){
            $sql=$info;
        }else{
            $sql="insert into $this->tableName (";
            $keys=array_keys($info);
            for ($i=0;$i<count($keys);$i++){
                $sql.=$keys[$i].",";
            }
            $sql=substr($sql,'0','-1').") values (";
            foreach ($info as $v){
                $sql.="'".$v."',";
            }
            $sql=substr($sql,'0','-1').")";
        }

        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    function delete($info){
        $sql="delete from $this->tableName where $info";
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    function update($info){
        if (is_string($info)&&strpos($info,'pdate')){
            $sql=$info;
        }else{
            $sql="update $this->tableName set ";
            foreach ($info as $key=>$value){
                $sql.=$key."='".$value."',";
            }
            $sql=substr($sql,'0','-1').' '.$this->wheres;
        }
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
}