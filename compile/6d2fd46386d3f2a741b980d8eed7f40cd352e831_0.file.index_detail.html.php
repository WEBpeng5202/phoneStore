<?php
/* Smarty version 3.1.30, created on 2018-02-07 03:55:17
  from "H:\wamp\wamp64\www\profect\App\view\index_detail.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7a78a5e13683_29828569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d2fd46386d3f2a741b980d8eed7f40cd352e831' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\profect\\App\\view\\index_detail.html',
      1 => 1517975711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7a78a5e13683_29828569 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
	<title>详情页</title>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
swiper.min.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
detail.css">
	<link rel="stylesheet" href="https://at.alicdn.com/t/font_463012_r724y9eo3ucjtt9.css">
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
detail.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="swipe-wrap" style="">
		<div class="top">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lunbo']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
					<div class="swiper-slide">
						<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" alt="">
					</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


				</div>
				<div class="swiper-pagination"></div>
			</div>

			<div class="back">
				<a href="javascript:history.back();">
					<img src="<?php echo IMG_PATH;?>
back_48bef14.png" alt="">
				</a>
			</div>
			<div class="share">
				<a href="">
					<img src="<?php echo IMG_PATH;?>
share_18c55d7.png"alt="">
				</a>
			</div>
			<div class="dot">
				<ul>
					<li class="active"></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>

		</div>
		<div class="title">
			<div class="name"><?php echo $_smarty_tpl->tpl_vars['data']->value['gname'];?>
</div>
			<div class="product_desc">
				<span><?php echo $_smarty_tpl->tpl_vars['data']->value['gactivity'];?>
</span>
				<p>
					<?php echo $_smarty_tpl->tpl_vars['data']->value['gtab'];?>

				</p>
			</div>
			<div class="priceBox">
				<div class="price"><?php echo $_smarty_tpl->tpl_vars['data']->value['gprice'];?>
</div>
				<div class="market_price">
					<span>￥</span>
					<del><?php echo $_smarty_tpl->tpl_vars['data']->value['gopc'];?>
</del>
					<p>直降<?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['gopc'];
$_prefixVariable1=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['gprice'];
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable1-$_prefixVariable2;?>
元</p>
				</div>
			</div>

		</div>
		<div class="line"></div>
		<div class="linksign">
			<span>已选</span><span>小米Note 3 全网通版 6GB内存 亮蓝色 64GB x1</span>
			<i class="iconfont">&#xe61d;</i>
		</div>
		<div class="linksign">
			<span>送至</span><span>北京市  东城区 </span><span>有现货</span>
			<i class="iconfont">&#xe61d;</i>
		</div>
		<div class="linksign">
			<img src="<?php echo IMG_PATH;?>
icon_dui_b333f13.png" alt="">
			<?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['gserver'];
$_prefixVariable3=ob_get_clean();
echo $_prefixVariable3;?>

		</div>
		<div class="line"></div>

		<div class="comment">
			<div class="pl">
				<span>用户评价(11827)</span><span>96.3%</span>满意<i class="iconfont">&#xe61d;</i>
			</div>
			<div class="user">
				<img src="<?php echo IMG_PATH;?>
f790b51a76afd7b41522048fa779d69d.jpg" alt="">
				<span>1336977727</span>
				<div class="zan">超爱</div>
				<div class="text">
					手机很漂亮，还在体验中，怎么找女朋友啊
				</div>
				<div class="img">
					<img src="<?php echo IMG_PATH;?>
6b2e5ecde282ec67d2a775301ccb22a2.webp" alt="">
					<img src="<?php echo IMG_PATH;?>
ba38ab3ff83ec1a9dcfab77dd361cd53.webp" alt="">
					<img src="<?php echo IMG_PATH;?>
696347851c5f91bc9e533c7419fd373c.webp" alt="">
					<img src="<?php echo IMG_PATH;?>
e9c1d561ae0dae15353f753725c022b9.webp" alt="">
				</div>
				<div class="pinglun">
					<span>官方回复：</span>
					想要找女朋友很简单~~到人来人往的街头，看到心仪的女生，把你的小米note3放在地下，她会说：先生，你的手机掉了~~你就可以回答：不，这是你的小米note3，你那么美，你的美只有小米note3可以拍出来~~然后，然后你们就有故事了(^o^)/~感谢您对小米的支持。
				</div>
			</div>
		</div>

		<div class="line"></div>

		<div class="descTabsView">
			<ul>
				<li><a href="">概述</a></li>
				<li><a href="">图集</a></li>
				<li><a href="">参数</a></li>
				<li><a href="">意外险</a></li>
			</ul>
		</div>
		<div class="view">
				<?php echo $_smarty_tpl->tpl_vars['data']->value['gcontent'];?>

		</div>

		<div class="line"></div>

		<div class="tuijian">
			<h5>为你推荐</h5>
			<div class="item">
				<div class="left">
					<img src="<?php echo IMG_PATH;?>
fb88c26a-8202-7926-b23c-6fe0dde8a7e4.webp" alt="">
					<h6>小米Note 3 </h6>
					<p>
						<i>￥</i>2299	<del>￥2499</del>
					</p>
				</div>
				<div class="right">
					<img src="<?php echo IMG_PATH;?>
fb88c26a-8202-7926-b23c-6fe0dde8a7e4.webp" alt="">
					<h6>小米Note 3 </h6>
					<p>
						<i>￥</i>2299	<del>￥2499</del>
					</p>
				</div>
			</div>
			<div class="item">
				<div class="left">
					<img src="<?php echo IMG_PATH;?>
fb88c26a-8202-7926-b23c-6fe0dde8a7e4.webp" alt="">
					<h6>小米Note 3 </h6>
					<p>
						<i>￥</i>2299	<del>￥2499</del>
					</p>
				</div>
				<div class="right">
					<img src="<?php echo IMG_PATH;?>
fb88c26a-8202-7926-b23c-6fe0dde8a7e4.webp" alt="">
					<h6>小米Note 3 </h6>
					<p>
						<i>￥</i>2299	<del>￥2499</del>
					</p>
				</div>
			</div>
			<div class="item">
				<div class="left">
					<img src="<?php echo IMG_PATH;?>
fb88c26a-8202-7926-b23c-6fe0dde8a7e4.webp" alt="">
					<h6>小米Note 3 </h6>
					<p>
						<i>￥</i>2299	<del>￥2499</del>
					</p>
				</div>
				<div class="right">
					<img src="<?php echo IMG_PATH;?>
fb88c26a-8202-7926-b23c-6fe0dde8a7e4.webp" alt="">
					<h6>小米Note 3 </h6>
					<p>
						<i>￥</i>2299	<del>￥2499</del>
					</p>
				</div>
			</div>
		</div>


	</div>
	<!-- TAB -->
	<div class="tab">
		<div class="tab_l">
			<div class="shouye">
				<a href="/profect/index.php/index/index" class="iconfont">&#xe618;</a>首页
			</div>
			<div class="shop">
				<a href="/profect/index.php/index_shop/index" class="iconfont">&#xe61c;</a>购物车
			</div>
		</div>
		
		<div class="addshop">
			<a>加入购物车</a>
		</div>
	</div>
	<div class="mask">
		<div class="addshops" style="width: 100%;height: 8rem;position:fixed;bottom: 0;background: #fff;z-index: 9999">
			<div class="addBack" style="position: absolute;top: 10px;right: 10px;cursor: pointer;z-index: 9999">
				<i class="iconfont">&#xe615;</i>
			</div>
			<div class="addImg" style="position: absolute;transform:translate3d(20px,-40%,0);width: 100px;height: 100px;overflow: hidden">
				<img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['gthumb'];?>
" alt="" class="img-thumbnail" style="width: 100%;height: 100%;">
			</div>
			<div class="text" style="position: absolute;right:0;width: calc(100% - 130px);top:5%">
				<p class="prices"><span style="font-size: .44rem;color: #ff6700;"><?php echo $_smarty_tpl->tpl_vars['data']->value['gprice'];?>
</span></p>
				<p><?php echo $_smarty_tpl->tpl_vars['data']->value['gname'];
echo $_smarty_tpl->tpl_vars['data']->value['gtype'];?>
</p>
			</div>
			<div class="add">
				添加至购物车
			</div>
		</div>
	</div>
	<?php echo '<script'; ?>
>
		$(function () {
            let body=$('body');
            let mask=$('.mask');
			$('.addshop').on('click',function () {
				mask.slideDown('slow','linear');
				body.addClass('alpha');
            });
			$('.addBack').on('click',function () {
				mask.slideUp();
                body.removeClass('alpha');
            })
        });
	<?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
>
        var swiper = new Swiper('.swiper-container',{
            direction : 'horizontal',
			autoplay:true,
            speed:800,
			loop:true,
            // effect : 'fade',
            pagination : {
                el:'.swiper-pagination',
            },
            // on:{
            //     init:function(swiper){
            //         slide=this.slides.eq(0);
            //         slide.addClass('ani-slide');
            //     },
            //     transitionStart: function(){
            //         for(i=0;i<this.slides.length;i++){
            //             slide=this.slides.eq(i);
            //             slide.removeClass('ani-slide');
            //         }
            //     },
            //     transitionEnd: function(){
            //         slide=this.slides.eq(this.activeIndex);
            //         slide.addClass('ani-slide');
            //
            //     },
            // }
        });

	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
