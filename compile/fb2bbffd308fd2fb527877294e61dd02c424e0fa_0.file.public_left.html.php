<?php
/* Smarty version 3.1.30, created on 2018-02-06 08:00:51
  from "H:\wamp\wamp64\www\profect\App\view\public_left.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7960b3b8ea92_23071773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb2bbffd308fd2fb527877294e61dd02c424e0fa' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\profect\\App\\view\\public_left.html',
      1 => 1517708675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7960b3b8ea92_23071773 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>APP后台管理</title>
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_558954_qxhhek3cvr3haor.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
manger.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="leftNav">
    <div class="logo">
        <img src="<?php echo IMG_PATH;?>
bg-logo.png" alt="">
    </div>
    <h5>分类管理 <i class="iconfont r">&#xe6a6;</i></h5>
    <ul>
        <li><a href="/profect/index.php/catemanage/index"><i class="iconfont a-i">&#xe69e;</i>添加/删除/修改</a></li>
        <li><a href="/profect/index.php/catemanage/show"><i class="iconfont a-i">&#xe68e;</i>展示</a></li>
    </ul>
    <h5>店铺管理<i class="iconfont ">&#xe6a6;</i></h5>
    <ul>
        <li><a href="/profect/index.php/boss"><i class="iconfont a-i">&#xe69e;</i>添加/删除/修改</a></li>
        <li><a href=""><i class="iconfont a-i">&#xe68e;</i>展示</a></li>
    </ul>
    <h5>商品管理 <i class="iconfont ">&#xe6a6;</i></h5>
    <ul>
        <li><a href="/profect/index.php/goods"><i class="iconfont a-i">&#xe69e;</i>添加/删除/修改</a></li>
        <li><a href="/profect/index.php/goods/show"><i class="iconfont a-i">&#xe68e;</i>展示</a></li>
    </ul>
    <h5>购物车管理<i class="iconfont ">&#xe6a6;</i></h5>
    <ul>
        <li><a href="" target="content"><i class="iconfont a-i">&#xe69e;</i>添加/删除/修改</a></li>
        <li><a href=""><i class="iconfont a-i">&#xe68e;</i>展示</a></li>
    </ul>
    <h5>我的管理<i class="iconfont r">&#xe6a6;</i></h5>
    <ul>
        <li><a href="" target="content"><i class="iconfont a-i">&#xe69e;</i>添加/删除/修改</a></li>
        <li><a href=""><i class="iconfont a-i">&#xe68e;</i>展示</a></li>
    </ul>
    <h5>推荐管理<i class="iconfont r">&#xe6a6;</i></h5>
    <ul>
        <li><a href=""><i class="iconfont a-i">&#xe69e;</i>添加/删除/修改</a></li>
        <li><a href=""><i class="iconfont a-i">&#xe68e;</i>展示</a></li>
    </ul>
</div>
<?php echo '<script'; ?>
>
    $(function () {
        $('h5').on('click', function () {
            $(this).next('ul').slideToggle(500);
        });
    })
<?php echo '</script'; ?>
><?php }
}
