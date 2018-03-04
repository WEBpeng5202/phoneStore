<?php
class unit{
    function __construct()
    {
        $this->str='';
    }
    function cateTree($db,$cpid,$flag,$tablename,$currentcid=null){
        $flag++;
        $parentid=null;
        if ($currentcid) {
            $sql = "select pid from $tablename where cid=$currentcid";
            $parentid = $result = $db->query($sql)->fetch_assoc()['pid'];
        }
        $sql = "select * from $tablename where pid=$cpid";
        $data = $db->query($sql);
        while ($row = $data->fetch_assoc()) {
            $str = str_repeat('-', $flag);
            if ($row['cid'] == $parentid) {
                $this->str .= "<option value=\"{$row['cid']}\" selected>{$str}{$row['cname']}</option>";
            } else {
                $this->str .= "<option value=\"{$row['cid']}\">{$str}{$row['cname']}</option>";
            }
            $this->cateTree($db, $row['cid'], $flag, $tablename);
        }
        return $this->str;
    }
}