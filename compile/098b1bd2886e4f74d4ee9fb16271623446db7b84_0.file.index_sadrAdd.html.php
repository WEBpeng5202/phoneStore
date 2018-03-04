<?php
/* Smarty version 3.1.30, created on 2018-02-27 11:10:11
  from "H:\wamp\wamp64\www\profect\app\view\index_sadrAdd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a953c93054506_80969888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '098b1bd2886e4f74d4ee9fb16271623446db7b84' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\profect\\app\\view\\index_sadrAdd.html',
      1 => 1519729775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a953c93054506_80969888 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo ICON_PATH;?>
iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
swiper.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index_adrAdd.css">
    <title>新建收货地址</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
index_adrAdd.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="wrap">
    <div class="top">
        <div class="back">
            <a href="javascript:history.back();">
                <i class="iconfont icon-xiangzuo"></i>
            </a>
        </div>
        <div class="title">
            新建收货地址
        </div>
    </div>
    <form action="" method="post">
        <div class="group-form">
            <label for="name">收货人：</label>
            <input type="text" placeholder="真实姓名" id="name" name="aname">
        </div>
        <div class="group-form">
            <label for="tel">手机号码：</label>
            <input type="tel" placeholder="手机号" id="tel" name="atel">
        </div>
        <div class="group-form adr-city">
            <label for="city">所在地区：</label>
            <input type="text" placeholder="省 市 区 街道信息" id="city" name="acity" value="">
        </div>
        <div class="adr-select">
            <div class="selected-adr">
                <span>请选择</span>
            </div>
            <div class="adr-content">
                <dl class="adr-1 adr-c-active">
                    <dd>北京</dd>
                    <dd>上海</dd>
                    <dd>山西</dd>
                    <dd>浙江</dd>
                    <dd>浙江</dd>
                    <dd>浙江</dd>
                    <dd>浙江</dd>
                    <dd>浙江</dd>
                    <dd>浙江</dd>
                    <dd>浙江</dd>
                    <dd>浙江</dd>
                    <dd>浙江</dd>
                    <dd>浙江</dd>
                </dl>
                <dl class="adr-2">
                    <dd>北京市</dd>
                </dl>
                <dl class="adr-3">
                    <dd>东城区</dd>
                    <dd>西城区</dd>
                    <dd>朝阳区</dd>
                    <dd>丰台区</dd>
                    <dd>石景山区</dd>
                    <dd>海淀区</dd>
                    <dd>门头沟区</dd>
                    <dd>房山区</dd>
                    <dd>通州区</dd>
                </dl>
                <dl class="adr-4 adr-last">
                    <dd>安定门街道</dd>
                    <dd>北新桥街道</dd>
                    <dd>朝阳门街道</dd>
                    <dd>崇文门外街道</dd>
                    <dd>东花市街道</dd>
                    <dd>东华门街道</dd>
                    <dd>东四街道</dd>
                </dl>
            </div>
        </div>
        <div class="group-form">
            <label for="detailAdress">详细地址：</label>
            <input type="text" placeholder="详细地址" id="detailAdress" name="adress">
        </div>
        <div class="group-form">
            <label for="defaultAdress">设置为默认地址：<input type="checkbox" placeholder="详细地址" id="defaultAdress" name="atab"></label>
        </div>

    </form>
    <div class="adr-add">
            确 认
    </div>


</div>
</body>
</html><?php }
}
