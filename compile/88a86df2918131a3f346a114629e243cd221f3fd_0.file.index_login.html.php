<?php
/* Smarty version 3.1.30, created on 2018-02-27 10:58:00
  from "H:\wamp\wamp64\www\profect\app\view\index_login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9539b8c33158_45423809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88a86df2918131a3f346a114629e243cd221f3fd' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\profect\\app\\view\\index_login.html',
      1 => 1517897922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9539b8c33158_45423809 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index_login.css">
	<link rel="stylesheet" href="https://at.alicdn.com/t/font_463012_i6ecsgt2sgiudi.css">
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
index_login.js"><?php echo '</script'; ?>
>
	<title>登陆界面</title>
</head>
<body>
	<div class="login">
		<div class="top">
			<ul>
				<li><img src="<?php echo IMG_PATH;?>
login_05.png" alt=""></li>
				<li><img src="<?php echo IMG_PATH;?>
login1_05.png" alt=""></li>
				<li><img src="<?php echo IMG_PATH;?>
login2_05.png" alt=""></li>
			</ul>
		</div>
		<form class="bottom">
			<input type="text" placeholder="手机号 / 邮箱 / 小米账号" name="regname">

			<input type="password" placeholder="密码" name="regpsd">

			<input type="button" value="登录">
		</form>
		<div class="zc">
			<a href="/profect/index.php/reg/register">注册账户</a>
			<a href="">忘记密码</a>
		</div>
		<div class="dsf">
			<a href=""><i class="iconfont">&#xe643;</i>微信</a>
			<a href=""><i class="iconfont">&#xe654;</i>QQ</a>
			<a href=""><i class="iconfont">&#xe627;</i>微博</a>
		</div>
		<a href="/profect/index.php/reg/my" class="back iconfont">&#xe615;</a>
	</div>
</body>
</html><?php }
}
