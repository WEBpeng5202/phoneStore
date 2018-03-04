<?php
/* Smarty version 3.1.30, created on 2018-02-27 01:04:52
  from "H:\wamp\wamp64\www\profect\App\view\manage_login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a94aeb4b602c3_67919108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95350cc8572f2c2c5765a9e1ef1e624d44c50c44' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\profect\\App\\view\\manage_login.html',
      1 => 1519660981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a94aeb4b602c3_67919108 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>APP-后台管理-登陆界面-</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
login.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="login">
    <div class="loginTop">
        <div class="close">
        </div>
        <div class="cr">
            <label class="y" title="登陆">
                <span style="display: none;width: 30px;height: 50px;background: #f1c85f;color: #fff;border-radius: 30px;position: relative;top: 20px;">登陆</span>
            </label>
            <label class="p" title="注册"></label>
            <label class="b"></label>
        </div>
    </div>
    <div class="image">
        <img src="/profect/static/image/avtar.png" alt="">
    </div>
    <div class="loginForm">
        <form>
            <div class="username">
                <input type="text" placeholder="Username" name="username">
            </div>
            <div class="password">
                <input type="password" placeholder="PassWord" name="password">
            </div>
            <div class="regChar">
                <img src="/profect/index.php/login/code" alt="" onclick="this.src='/profect/index.php/login/code?u='+Math.random();">
                <input type="text" placeholder="请输入验证码">
            </div>
        </form>
    </div>

    <div class="loginBottom">
<button type="submit">Login</button>
    </div>
</div>

</body>
</html><?php }
}
