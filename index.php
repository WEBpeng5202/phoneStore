<?php
/* 定义常量，
    文件的路径
 * 减轻文件引入的书写复杂问题
 * */

header('Content-type:text/html;charset=utf8');
////////
define('CSS_PATH','/profect/static/css/');
define('JS_PATH','/profect/static/js/');
define('IMG_PATH','/profect/static/image/');
define('ICON_PATH','/profect/static/iconfont/');
define('PLUG_PATH','/profect/plug/');
define('FONT_PATH',__DIR__.'/static/font/');
///////////

include "libs/router.php";

include "libs/smarty/Smarty.class.php";
include "libs/manage_smarty.php";
include "libs/index_smarty.php";
include "libs/db.php";
include "libs/function.php";
include "libs/code.php";
///////////
router::index();