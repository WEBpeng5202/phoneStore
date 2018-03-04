<?php
/* Smarty version 3.1.30, created on 2018-02-06 11:08:54
  from "H:\wamp\wamp64\www\profect\App\view\index_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a798cc6060697_50246097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6745c2dc59767e2784bfa0fa55888e789ba8888' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\profect\\App\\view\\index_list.html',
      1 => 1517915331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a798cc6060697_50246097 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
    <title>分类</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
list.css">
    <!--<link rel="stylesheet" href="https://at.alicdn.com/t/font_468234_v3bwh2zky1zto6r.css">-->
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_471281_q3579c31v4lblnmi.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem1.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="wrap">
    <div class="header">
        <div class="search">
            <i class="iconfont">&#xe70b;</i>
            <input type="text" value="红米Note 4X 赠活塞耳机">
        </div>
        <div class="mail">
            <a href="">
                <i class="iconfont">&#xe996;</i>
            </a>
        </div>
    </div>
    <div class="content">
        <div class="lists">
            <ul>
                <?php
$_smarty_tpl->tpl_vars['var'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? 9+1 - (0) : 0-(9)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = 0, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration == 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration == $_smarty_tpl->tpl_vars['var']->total;?>
                <li>
                    <a href="javascript:;">
                        <?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['var']->value]['cname'];?>

                    </a>
                </li>
                <?php }
}
?>

            </ul>
        </div>
        <div class="right">
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 9+1 - (0) : 0-(9)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <div class="js_items">
                <div class="img">
                    <a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value]['cthumb'];?>
" alt=""></a>
                </div>
                <!-- 手机 -->
                <div class="title">
                    <span></span>
                    <?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value]['cname'];?>

                    <span></span>
                </div>
                <div class="lis">
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value[$_smarty_tpl->tpl_vars['i']->value], 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                        <li>
                            <a href="/profect/index.php/index/goodsList?cid=<?php echo $_smarty_tpl->tpl_vars['val']->value['cid'];?>
">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['cthumb'];?>
" alt="">
                                <p><?php echo $_smarty_tpl->tpl_vars['val']->value['cname'];?>
</p>
                            </a>
                        </li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ul>
                </div>
            </div>
            <?php }
}
?>

            <div class="space" style="height: .97rem;"></div>
        </div>
    </div>


    <!-- TAB -->
    <div class="tab">
        <div class="shouye">
            <a href="/profect/index.php/index/index"><i class="iconfont">&#xe611;</i></a>
            首页
        </div>
        <div class="list">
            <a href="/profect/index.php/index/index_list"  class="hot"><i class="iconfont">&#xe615;</i></a>
            分类
        </div>
        <div class="shop">
            <a href="/profect/index.php/index_shop/index"><i class="iconfont">&#xe648;</i></a>
            购物车
        </div>
        <div class="user">
            <a href="/profect/index.php/reg/my"><i class="iconfont">&#xe608;</i></a>
            我的
        </div>
    </div>
</div>
</body>
</html>
<?php echo '<script'; ?>
>
    $(function () {
        let items = $('.js_items');
        let listLi = $('.lists>ul>li');
        listLi.on('click',function () {
            let a = $(this).index();
            console.log(a);
            listLi.removeClass('active');
            $(this).addClass('active');
            let top = items.eq(a).offset().top - 50;
            $(window).scrollTop(top);
        });
        $(window).scroll(function () {
            let sct = $(this).scrollTop();
            items.each(function (index, e) {
                if (sct >= $(e).offset().top-100) {
                    listLi.removeClass('active').eq(index).addClass('active');
                }
            });


        });
    });
<?php echo '</script'; ?>
>
<?php }
}
