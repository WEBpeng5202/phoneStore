<?php
/* Smarty version 3.1.30, created on 2018-02-26 02:32:14
  from "H:\wamp\wamp64\www\profect\App\view\index_setAdr.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9371ae339166_47797050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53d1df63d2a9c0bec8b0ac52c7cfe60669fa7919' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\profect\\App\\view\\index_setAdr.html',
      1 => 1519612302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9371ae339166_47797050 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
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
index_Adress.css">
    <title>Document</title>
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
index_setAdr.js"><?php echo '</script'; ?>
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
            收货地址
        </div>
    </div>
    <div class="adr-list-wrap">
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['adr']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['adr']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
        <div class="adr-list" data-id="<?php echo $_smarty_tpl->tpl_vars['adr']->value[$_smarty_tpl->tpl_vars['i']->value]['aid'];?>
">
            <div class="cont">
                <div class="names"><?php echo $_smarty_tpl->tpl_vars['adr']->value[$_smarty_tpl->tpl_vars['i']->value]['aname'];?>
</div>
                <div class="tel"><?php echo $_smarty_tpl->tpl_vars['adr']->value[$_smarty_tpl->tpl_vars['i']->value]['atel'];?>
</div>
                <div class="del"><i class="iconfont icon-delete"></i></div>
            </div>
            <div class="adr-info">
                <div class="adr-city">
                    <?php echo $_smarty_tpl->tpl_vars['adr']->value[$_smarty_tpl->tpl_vars['i']->value]['acity'];?>

                    <div class="adr-place">
                        <?php echo $_smarty_tpl->tpl_vars['adr']->value[$_smarty_tpl->tpl_vars['i']->value]['adress'];?>

                    </div>
                </div>
                <a href="/profect/index.php/my/update?aid=<?php echo $_smarty_tpl->tpl_vars['adr']->value[$_smarty_tpl->tpl_vars['i']->value]['aid'];?>
" class="adr-edit">
                    <i class="iconfont icon-you"></i>
                </a>

            </div>
        </div>
        <?php }
}
?>

        <div class="space-bottom"></div>
    </div>
    <div class="adr-add">
        <a href="/profect/index.php/my/adrAdd">
            新建地址
        </a>
    </div>


</div>
</body>
</html><?php }
}
