<?php
class upload{

    function index(){
        $file=$_FILES['file'];
        if (is_uploaded_file($file['tmp_name'])){
            if (!file_exists('static/upload')){
                mkdir('static/upload');
            }
            $date=date('y-m-d');
            if (!file_exists('static/upload/'.$date)){
                mkdir('static/upload/'.$date);
            }
            $type=stristr($file['name'],'.');
            $path='static/upload/'.$date.'/'.time().mt_rand(0,200).$type;
            $urlImg='/profect/'.$path;
            if (move_uploaded_file($file['tmp_name'],$path)){
                echo $urlImg;
            }
        }
    }
}