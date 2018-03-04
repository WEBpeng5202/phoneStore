<?php
/* Smarty version 3.1.30, created on 2018-02-27 10:58:16
  from "H:\wamp\wamp64\www\profect\app\view\index_self.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9539c8521884_58356394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa783944e24d317428cc250d259f7c04ece536ad' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\profect\\app\\view\\index_self.html',
      1 => 1517992723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9539c8521884_58356394 (Smarty_Internal_Template $_smarty_tpl) {
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
	<link rel="stylesheet" href="https://at.alicdn.com/t/font_471281_q3579c31v4lblnmi.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index3.css">
	<style>
		.header .per{
			border-radius: 100%;
			border: 3px solid hsla(0,0%,100%,.4);
			overflow: hidden;
		}
	</style>
</head>
<body>

	<div class="header">
	  	<a href="login.html">
	  		<div class="per">
				<img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['regavatar'];?>
" alt="" style="width: 100%">
			</div>
	  		<div class="name" style="position:relative;"><?php echo $_smarty_tpl->tpl_vars['user']->value['regname'];?>
<br><span style="color: hsla(0,0%,100%,.6);position:absolute;top: .3rem;"><?php echo $_smarty_tpl->tpl_vars['user']->value['regphone'];?>
</span>
			</div>
	  	</a>
	</div>
	<div class="log">
		<a href="index6.html">
			<div>我的订单</div>
			<span>全部订单</span>
			<span class="iconfont">&#xe6da;</span>
		</a>
	</div>
	<div class="nav">
		<div class="name">
			<a href="">
				<i class="iconfont">&#xe65d;</i>
				<h1>待付款</h1>
			</a>
		</div>
		<div class="name">
			<a href="">
				<i class="iconfont">&#xe641;</i>
				<h2>待收货</h2>
			</a>
		</div>
		<div class="name">
			<a href="">
				<i class="iconfont">&#xe653;</i>
				<h3>待评价</h3>
			</a>
		</div>
		<div class="name">
			<a href="">
				<i class="iconfont">&#xe62c;</i>
				<h4>退换修</h4>
			</a>
		</div>
	</div>
	<div class="item">
		<ul>
				<li>
					<a href="" style="display: block;width: 100%;height: 100%;">
						<div class="icon">
							<i class="iconfont">&#xe66c;</i>
						</div>
						<div class="name">
							<p>会员福利</p>
							<i class="iconfont">&#xe6da;</i>
						</div>
					</a>
				</li>
				<li>
					<a href="" style="display: block;width: 100%;height: 100%;">
						<div class="icon">
							<i class="iconfont" style="color:#51BBE0">&#xe64d;</i>
						</div>
						<div class="name" style="border:0">
							<p>我的钱包</p>
							<i class="iconfont">&#xe6da;</i>
						</div>
					</a>
				</li>
				<li style="margin-top: 0.2rem;">
					<a href="" style="display: block;width: 100%;height: 100%;">
						<div class="icon">
							<i class="iconfont" style="color:#F96C5E">&#xe63c;</i>
						</div>
						<div class="name">
							<p>服务中心</p>
							<i class="iconfont">&#xe6da;</i>
						</div>
					</a>
				</li>
				<li>
					<a href="" style="display: block;width: 100%;height: 100%;">
						<div class="icon">
							<i class="iconfont" style="color:#FF8B43">&#xe718;</i>
						</div>
						<div class="name">
							<p>小米之家</p>
							<i class="iconfont">&#xe6da;</i>
						</div>
					</a>
				</li>
				<li>
					<a href="" style="display: block;width: 100%;height: 100%;">
						<div class="icon">
							<i class="iconfont" style="color:#90E534;font-size:0.5rem;margin-left: 0.09rem;">&#xe621;</i>
						</div>
						<div class="name" style="border:0">
							<p>更多功能</p>
							<i class="iconfont">&#xe6da;</i>
						</div>
					</a>
				</li>
				<li style="margin-top: 0.2rem;">
					<a href="/profect/index.php/my/setMenu" style="display: block;width: 100%;height: 100%;">
						<div class="icon">
							<i class="iconfont" style="color:#818C99">&#xe613;</i>
						</div>
						<div class="name" style="border-bottom: none">
							<p>设置</p>
							<i class="iconfont">&#xe6da;</i>
						</div>
					</a>

				</li>
		</ul>
	</div>



	  <!-- 底部 -->
	<div class="tab">
		<div class="shouye">
			<a href="/profect/index.php/index/index"><i class="iconfont">&#xe611;</i></a>
			首页
		</div>
		<div class="list">
			<a href="/profect/index.php/index/index_list"><i class="iconfont">&#xe615;</i></a>
			分类
		</div>
		<div class="shop">
			<a href="/profect/index.php/index_shop/index"><i class="iconfont">&#xe648;</i></a>
			购物车
		</div>
		<div class="user">
			<a href="/profect/index.php/reg/my" class="hot"><i class="iconfont">&#xe608;</i></a>
			我的
		</div>
	</div>
</body>
</html><?php }
}
