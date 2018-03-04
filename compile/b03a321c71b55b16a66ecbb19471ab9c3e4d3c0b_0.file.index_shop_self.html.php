<?php
/* Smarty version 3.1.30, created on 2018-02-12 14:29:31
  from "H:\wamp\wamp64\www\profect\App\view\index_shop_self.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a81a4cb9b1f68_02685205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b03a321c71b55b16a66ecbb19471ab9c3e4d3c0b' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\profect\\App\\view\\index_shop_self.html',
      1 => 1518445762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a81a4cb9b1f68_02685205 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
    <title>购物车2</title>
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_471281_j2bjoq2scnhilik9.css">
    <link rel="stylesheet" href="<?php echo ICON_PATH;?>
iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
gou.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo ICON_PATH;?>
iconfont.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
index_shop_self.js"><?php echo '</script'; ?>
>
    <style type="text/css">
        .icon {
            width: .44rem;
            height: .44rem;
            vertical-align: .54rem;
            fill: currentColor;
            overflow: hidden;
            font-size: .4rem;
        }
    </style>
</head>
<body>
<div class="top">
    <a href="javascript:history.back();">
        <i class="iconfont goback">&#xe607;</i>
    </a>
    <h1>购物车</h1>
    <a href="">
        <i class="iconfont search">&#xe70b;</i>
    </a>
</div>
<section>
    <ul class="item">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userShop']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <li class="goods" data-gid="<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
">
            <div class="choose">
                <label>
                    <input type="checkbox" class="check" checked>
                    <span class="checkInput iconfont"></span>
                </label>
            </div>
            <a href="/profect/index.php/index/goods?gid=<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['gthumb'];?>
" alt=""></a>
            <div class="con">
                <p class="name"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];
echo $_smarty_tpl->tpl_vars['v']->value['gcolor'];?>
</p>
                <div class="price">
                    <span><?php echo $_smarty_tpl->tpl_vars['v']->value['gprice'];?>
</span>
                    <del><?php echo $_smarty_tpl->tpl_vars['v']->value['gprice'];?>
</del>
                </div>
                <div class="num">
                    <div class="number">
                        <div class="input-sub">
                            <svg class="icon" aria-hidden="true">
                                <use xlink:href="#icon-negative"></use>
                            </svg>
                        </div>
                        <div class="input-num">
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
">
                        </div>
                        <div class="input-add">
                            <svg class="icon" aria-hidden="true">
                                <use xlink:href="#icon-plus"></use>
                            </svg>
                        </div>
                    </div>
                    <button class="del">
                        <svg class="icon" aria-hidden="true">
                            <use xlink:href="#icon-delete"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>
    <div class="point">
        <p>温馨提示：产品是否购买成功，以最终下单为准，请尽快结算</p>
    </div>
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
            <a href=""> <img src="<?php echo IMG_PATH;?>
fcea1e42-1ac5-d67c-4eb6-a3b051d32491.webp" alt=""></a>
            <div class="info">
                <div class="one">小米短袖T恤</div>
                <div class="two">39
                    <del>¥49</del>
                </div>
            </div>
        </li>
        <li>
            <a href=""> <img src="<?php echo IMG_PATH;?>
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
<!-- 底部 -->
<div class="footer">
    <div class="content" style="color: #9de8f7;">
        <div>
            共 <span class="totalNumber" style="color: #fff">0</span> 件
        </div>
        <div>
            金额
            <strong class="totalPrice" style="color: #fff;">169</strong>
            <span>元</span>
        </div>

    </div>
    <a href="/profect/index.php/index/index" class="btn">继续购物</a>
    <a class="buy">去结算(<span class="totalNumber">0</span>)</a>
</div>

</body>
</html><?php }
}
