<?php
/* Smarty version 3.1.30, created on 2018-02-06 08:50:47
  from "H:\wamp\wamp64\www\profect\App\view\index_shop.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a796c6785ea14_46744364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b7a60e725d498c4fc21ad395d8f4f541b08e363' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\profect\\App\\view\\index_shop.html',
      1 => 1517907046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a796c6785ea14_46744364 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
	<title>购物车</title>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
shop.css">
	<link rel="stylesheet" href="https://at.alicdn.com/t/font_468234_1gl6aht9uyuv7vi.css">
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="wrap">
		<!-- 顶部 -->
		<div class="header">
			<div class="sys">
				
			</div>
			<div class="title">
				购物车
			</div>
			<div class="mail">
				<a href=""><img src="<?php echo IMG_PATH;?>
xiaoxi_04.png" alt=""></a>
			</div>
		</div>
		<!-- 登陆后享受更多优惠 -->
		<div class="go">
			<span>登陆后享受更多优惠</span>
			<a href="login.html">去登陆<i class="iconfont">&#xe602;</i></a>
		</div>
		<!-- 购物车 -->
		<div class="shopping">
			<img src="<?php echo IMG_PATH;?>
shop_09.png" alt="">
			<span>购物车还是空的</span>
			<a href="">去逛逛</a>
		</div>

		<!-- 猜你喜欢 -->
		<div class="lovely">
			<div class="title">
				<img src="<?php echo IMG_PATH;?>
shop_12.png" alt="">
				<div class="bottom">
					<span></span>
					每一款都酷到没朋友
					<span></span>
				</div>
			</div>
			<div class="con">
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
bbb18838-aae5-9ed0-6c83-c126fd5f4659.webp" alt="">
					<h6>小米VR眼镜玩具版</h6>
					<p>
						<i>￥</i>399<del></del>
					</p>
				</div>
			</div>
			<div class="item">
				<div class="left">
					<img src="<?php echo IMG_PATH;?>
g1.jpg" alt="">
					<h6>小米MIX 2 64GB</h6>
					<p>
						<i>￥</i>3299	<del></del>
					</p>
				</div>
				<div class="right">
					<img src="<?php echo IMG_PATH;?>
a09eac36-c1e1-e8b0-5ef7-b5c7e2c2009b.webp" alt="">
					<h6>小米6 </h6>
					<p>
						<i>￥</i>2299	<del></del>
					</p>
				</div>
			</div>
			<div class="item">
				<div class="left">
					<img src="<?php echo IMG_PATH;?>
f9543335-7d0c-722a-b8b0-c151dac2d69e.webp" alt="">
					<h6>红米极清高透贴膜</h6>
					<p>
						<i>￥</i>19<del>￥30</del>
					</p>
				</div>
				<div class="right">
					<img src="<?php echo IMG_PATH;?>
6aa9efb3-d003-6c52-ad55-f0cf8347a481.webp" alt="">
					<h6>小米Note 3 限量版</h6>
					<p>
						<i>￥</i>2399	<del></del>
					</p>
				</div>
			</div>
			<div class="item">
				<div class="left">
					<img src="<?php echo IMG_PATH;?>
56f01502-afdd-4f6c-5479-f0c0b413efde.webp" alt="">
					<h6>简约头层小牛皮钱包</h6>
					<p>
						<i>￥</i>129<del></del>
					</p>
				</div>
				<div class="right">
					<img src="<?php echo IMG_PATH;?>
0fd5c164-2a3c-3f11-bbac-4fdc4e8e34e8.webp" alt="">
					<h6>小米5s Plus 贴膜</h6>
					<p>
						<i>￥</i>29<del></del>
					</p>
				</div>
			</div>
		</div>
			</div>
		</div>
		<!-- TAB -->
		<div class="tab">
			<div class="shouye">
				<a href="indexNEW.html"></a>
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
				<a href="self.html"></a>
				我的
			</div>
		</div>
	</div>
</body>
</html><?php }
}
