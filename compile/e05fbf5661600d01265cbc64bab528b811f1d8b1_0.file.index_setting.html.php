<?php
/* Smarty version 3.1.30, created on 2018-02-26 01:09:22
  from "H:\wamp\wamp64\www\profect\App\view\index_setting.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a935e424e97d6_50172622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e05fbf5661600d01265cbc64bab528b811f1d8b1' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\profect\\App\\view\\index_setting.html',
      1 => 1519607357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a935e424e97d6_50172622 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
	<title>我的</title>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem1.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="https://at.alicdn.com/t/font_471281_iqvd9uicwauoko6r.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index_setting.css">
	<style>
		body{
			background: #fff;
		}
	</style>
</head>
<body>
<div style="width: 100%;height: .8rem;position:relative;font-size: .32rem;line-height: .8rem;text-align: center;background-color: #000000;color: #fff;">
	<a href="javascript:history.back();"><i class="iconfont" style="font-size: .5rem;line-height: .8rem;position:absolute;top: 50%;left:.2rem;transform: translateY(-50%);color: #fefefe">&#xe607;</i></a>
	个人中心
	<i class="iconfont" style="font-size: .5rem;line-height: .8rem;position:absolute;top: 50%;right:.2rem;transform: translateY(-50%);color: #fefefe">&#xe70b;
	</i>
</div>
<div class="list">
	<ul>
		<li onclick="location.href='/profect/index.php/my/setAdr';">地址管理</li>
	</ul>
</div>
	<!---->



	  <!-- 底部 -->
	<div class="tab" style="display: none">
		<div class="shouye">
			<a href="indexNEW.html"><i class="iconfont">&#xe618;</i></a>
			首页
		</div>
		<div class="list">
			<a href="list.html"></a>
			分类
		</div>
		<div class="shop">
			<a href="shop.html"></a>
			购物车
		</div>
		<div class="user">
			<a href=""></a>
			我的
		</div>
	</div>
</body>
</html><?php }
}
