<?php
/* Smarty version 3.1.30, created on 2018-02-27 11:00:13
  from "H:\wamp\wamp64\www\profect\app\view\index_balance.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a953a3d01dd40_59976846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77d1565308c367b0703be22235eeeefb95d4e17d' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\profect\\app\\view\\index_balance.html',
      1 => 1519556275,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a953a3d01dd40_59976846 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo ICON_PATH;?>
iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
swiper.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index_balance.css">
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
swiper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
index_balance.js"><?php echo '</script'; ?>
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
            用户结算
        </div>
    </div>
    <div class="adr-wrap">
        <div class="adr">
            <div class="cont">
                <div class="names"><?php echo $_smarty_tpl->tpl_vars['adr']->value['aname'];?>
</div>
                <div class="tel"><?php echo $_smarty_tpl->tpl_vars['adr']->value['atel'];?>
</div>
            </div>
            <div class="adr-city">
                <?php echo $_smarty_tpl->tpl_vars['adr']->value['acity'];?>

                <?php echo $_smarty_tpl->tpl_vars['adr']->value['adress'];?>
 (030032)
            </div>
        </div>
        <a href="/profect/index.php/my/Adr?fid=<?php echo $_smarty_tpl->tpl_vars['fid']->value;?>
" class="adr-edit">
            <i class="iconfont icon-you"></i>
        </a>
    </div>
    <div class="pay-type">
        <ul>
            <li class="wx-pay">
                <div class="pay-img">
                    <i class="iconfont icon-weixinzhifu"></i>
                </div>
                <div class="pay-name">
                    微信支付
                </div>
                <div class="pay-desc">
                    推荐使用 更安全快捷
                </div>
                <div class="pay-radio">
                    <label>
                        <input type="radio" class="radio" name="radio" checked>
                        <span class="radio-input iconfont"></span>
                    </label>
                </div>
            </li>
            <li class="zfb-pay">
                <div class="pay-img">
                    <i class="iconfont icon-zhifubao"></i>
                </div>
                <div class="pay-name">
                    支付宝
                </div>
                <div class="pay-desc">
                    支付订单，赢1999元红包
                </div>
                <div class="pay-radio">
                    <label>
                        <input type="radio" class="radio" name="radio">
                        <span class="radio-input iconfont"></span>
                    </label>
                </div>
            </li>
            <li class="hb-pay pay-toggle">
                <div class="pay-img">
                    <i class="iconfont icon-huabei"></i>
                </div>
                <div class="pay-name">
                    花呗分期
                </div>
                <div class="pay-desc">
                    趣享免息
                </div>
                <div class="pay-radio">
                    <label>
                        <input type="radio" class="radio" name="radio">
                        <span class="radio-input iconfont"></span>
                    </label>
                </div>
            </li>
            <li class="qb-pay pay-toggle">
                <div class="pay-img">
                    <i class="iconfont icon-zhifu"></i>
                </div>
                <div class="pay-name">
                    我的钱包
                </div>
                <div class="pay-desc">
                    最高优惠享免单
                </div>
                <div class="pay-radio">
                    <label>
                        <input type="radio" class="radio" name="radio">
                        <span class="radio-input iconfont"></span>
                    </label>
                </div>
            </li>
            <li class="yl-pay pay-toggle">
                <div class="pay-img">
                    <i class="iconfont icon-yinlian1193427easyiconnet"></i>
                </div>
                <div class="pay-name">
                    银联在线支付
                </div>
                <div class="pay-desc">
                    快捷
                </div>
                <div class="pay-radio">
                    <label>
                        <input type="radio" class="radio" name="radio">
                        <span class="radio-input iconfont"></span>
                    </label>
                </div>
            </li>
            <li class="other-pay">
                <p><span id="tg-text">收起其他支付方式  </span><i class="iconfont icon-less"></i></p>
            </li>
        </ul>
    </div>
    <div class="goods">
        <ul>
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['goods']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['goods']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <li>
                <div class="g-img">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value[$_smarty_tpl->tpl_vars['i']->value]['gthumb'];?>
" alt="">
                </div>
                <div class="content">
                    <div class="c-top">
                        <div class="g-name"><?php echo $_smarty_tpl->tpl_vars['goods']->value[$_smarty_tpl->tpl_vars['i']->value]['gname'];?>
/<?php echo $_smarty_tpl->tpl_vars['goods']->value[$_smarty_tpl->tpl_vars['i']->value]['gcolor'];?>
/<?php echo $_smarty_tpl->tpl_vars['goods']->value[$_smarty_tpl->tpl_vars['i']->value]['gtype'];?>
</div>
                    </div>
                    <div class="c-bot">
                        <div class="g-num">数量：<span><?php echo $_smarty_tpl->tpl_vars['num']->value[$_smarty_tpl->tpl_vars['i']->value]['totalnum'];?>
</span>,</div>
                        <div class="g-price">单价：<span><?php echo number_format($_smarty_tpl->tpl_vars['goods']->value[$_smarty_tpl->tpl_vars['i']->value]['gprice'],2,'.','');?>
</span></div>
                    </div>
                </div>
            </li>
            <?php }
}
?>

        </ul>
    </div>
    <div class="goodsPrice">
        <p><span>商品价格：</span><span class="totalPrice">3397.00</span></p>
        <p><span>配送费用：</span><span>0.00</span></p>
    </div>
    <div class="spaceBottom"></div>
</div>
<div class="buy">
    <div class="buy-l">
        共<span class="totalNumber">3</span>件&nbsp;&nbsp;合计：<span class="totalPrice">3000.00</span>
    </div>
    <div class="buy-r">
        <div class="botton">去付款</div>
    </div>
</div>
</body>
</html><?php }
}
