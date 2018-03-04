<?php
/* Smarty version 3.1.30, created on 2018-02-08 03:25:09
  from "H:\wamp\wamp64\www\profect\App\view\index_liebiao.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7bc315b698f2_84474459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9beaf239df7c51ea5eac9051a7b253d45f93ffb5' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\profect\\App\\view\\index_liebiao.html',
      1 => 1518060305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7bc315b698f2_84474459 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>商品列表</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem1.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_471281_iqvd9uicwauoko6r.css">
    <link rel="stylesheet" href="<?php echo ICON_PATH;?>
iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
liebiao.css">
</head>
<body>
<div class="top">
    <a href="javascript:history.back();">
        <i class="iconfont goback">&#xe607;</i>
    </a>
    <h1><?php echo $_smarty_tpl->tpl_vars['title']->value['cname'];?>
</h1>
    <a href="">
        <i class="iconfont search">&#xe70b;</i>
    </a>
</div>
<section>
    <ul class="item">
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['data']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['data']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
        <li>
           <div class="left">
               <a href="/profect/index.php/index/goods?gid=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value]['gid'];?>
">
                   <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value]['gthumb'];?>
" alt="">
               </a>
           </div>
            <div class="right">
                <div class="name">
                    <p><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value]['gname'];?>
</p>
                </div>
                <div class="desc">

                    <p><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value]['gtab'];?>
</p>

                </div>
                <div class="price">
                    <span><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value]['gprice'];?>
</span>
                </div>
            </div>
        </li>
        <?php }
}
?>

    </ul>
</section>
<div class="title">
    <div>猜你喜欢</div>
    <div>时时推荐你的心心念念</div>
</div>
<div class="list">
    <ul>
        <li>
            <a href=""><img src="<?php echo IMG_PATH;?>
g1.jpg" alt=""></a>
            <div class="info">
                <div class="one">小米MIX 2 64GB</div>
                <div class="two">
                    3299
                </div>
            </div>
        </li>
        <li>
            <a href="">
                <img src="<?php echo IMG_PATH;?>
bbb18838-aae5-9ed0-6c83-c126fd5f4659.webp" alt="">
            </a>
            <div class="info">
                <div class="one">小米VR眼镜玩具版</div>
                <div class="two">
                    39
                </div>
            </div>
        </li>
        <li>
            <a href="">
                <img src="<?php echo IMG_PATH;?>
f9543335-7d0c-722a-b8b0-c151dac2d69e.webp" alt="">
            </a>
            <div class="info">
                <div class="one">红米极清高透贴膜</div>
                <div class="two">19
                    <del>¥30</del>
                </div>
            </div>
        </li>
        <li>
            <a href="index4.html">
                <img src="<?php echo IMG_PATH;?>
a09eac36-c1e1-e8b0-5ef7-b5c7e2c2009b.webp" alt="">
            </a>
            <div class="info">
                <div class="one">小米6</div>
                <div class="two">2299
                </div>
            </div>
        </li>
        <li>
            <a href=""><img src="<?php echo IMG_PATH;?>
fb88c26a-8202-7926-b23c-6fe0dde8a7e4.webp" alt=""></a>
            <div class="info">
                <div class="one">小米Note 3 128GB</div>
                <div class="two">2599
                    <del>¥2899</del>
                </div>
            </div>
        </li>
        <li>
            <a href=""><img src="<?php echo IMG_PATH;?>
08a75380-010a-7c99-bd1b-c6ff45dfa269.webp" alt=""></a>
            <div class="info">
                <div class="one">音乐蓝牙车充</div>
                <div class="two">
                    99
                </div>
            </div>
        </li>
        <li>
            <a href=""><img src="<?php echo IMG_PATH;?>
5484a1a1-da4f-392c-4f36-d62e61c5a654.webp" alt=""></a>
            <div class="info">
                <div class="one">肤感软胶保护套</div>
                <div class="two">19
                    <span>起</span>
                </div>
            </div>
        </li>
        <li>
            <a href="">
                <img src="<?php echo IMG_PATH;?>
0fd5c164-2a3c-3f11-bbac-4fdc4e8e34e8.webp" alt="">
            </a>
            <div class="info">
                <div class="one">小米5s Plus 贴膜</div>
                <div class="two">29
                </div>
            </div>
        </li>
        <li>
            <a href=""><img src="<?php echo IMG_PATH;?>
f2a23992-8419-3435-faea-2af83118489c.webp" alt=""></a>
            <div class="info">
                <div class="one">小米5钢化玻璃贴膜</div>
                <div class="two">29
                    <del>¥39</del>
                </div>
            </div>
        </li>
        <li>
            <a href="">	<img src="<?php echo IMG_PATH;?>
fcea1e42-1ac5-d67c-4eb6-a3b051d32491.webp" alt=""></a>
            <div class="info">
                <div class="one">小米短袖T恤 </div>
                <div class="two">39
                    <del>¥49</del>
                </div>
            </div>
        </li>
        <li >
            <a href="">	<img src="<?php echo IMG_PATH;?>
56f01502-afdd-4f6c-5479-f0c0b413efde.webp" alt=""></a>

            <div class="info">
                <div class="one">简约头层小牛皮钱包</div>
                <div class="two">
                    129
                </div>
            </div>
        </li>
        <li style="margin-bottom: 1.5rem;">
            <a href=""><img src="<?php echo IMG_PATH;?>
6aa9efb3-d003-6c52-ad55-f0cf8347a481.webp" alt=""></a>
            <div class="info">
                <div class="one">小米Note 3 限量版</div>
                <div class="two">
                    2399
                </div>
            </div>
        </li>
    </ul>
</div>
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
</body>
</html><?php }
}
