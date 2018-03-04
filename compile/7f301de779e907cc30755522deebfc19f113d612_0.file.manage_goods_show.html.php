<?php
/* Smarty version 3.1.30, created on 2018-02-06 08:03:40
  from "H:\wamp\wamp64\www\profect\App\view\manage_goods_show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a79615c1ecbb3_04050040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f301de779e907cc30755522deebfc19f113d612' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\profect\\App\\view\\manage_goods_show.html',
      1 => 1517904101,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/public_left.html' => 1,
  ),
),false)) {
function content_5a79615c1ecbb3_04050040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/public_left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
cate_show.js"><?php echo '</script'; ?>
>-->
<div class="content">
    <div class="fixed">
        <div class="userImg">
            <img src="<?php echo IMG_PATH;?>
username.png" alt="" class="img-thumbnail">
        </div>
    </div>
    <div class="con">
        <div class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>欢迎来到后台管理!</strong>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="active">商品ID</th>
                    <th class="success">商品名称</th>
                    <th class="success">商品活动</th>
                    <th class="success">商品标签</th>
                    <th class="success">商品价格</th>
                    <th class="info">商品列表展示图</th>
                    <th class="info">商品介绍展示图</th>
                    <th class="warning">商品所属分类</th>
                    <th class="danger">操作</th>
                </tr>
            </thead>
            <tbody>
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['num']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['num']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                <tr data-id="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value]['gid'];?>
">
                    <td class="active"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value]['gid'];?>
</td>
                    <td class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value]['gname'];?>
</td>
                    <td class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value]['gactivity'];?>
</td>
                    <td class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value]['gtab'];?>
</td>
                    <td class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value]['gprice'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value]['gopc'];?>
</td>
                    <td class="info"><img src="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value]['gthumb'];?>
" alt="" class="img-thumbnail" style="width: 100px"></td>
                    <td class="info">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value[$_smarty_tpl->tpl_vars['i']->value], 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" alt="" class="img-thumbnail" style="width: 100px">
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </td>
                    <td class="warning"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value]['cid'];?>
</td>
                    <td class="danger"><a href="/profect/index.php/goods/update?gid=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value]['gid'];?>
" class="btn btn-danger">修改</a><a href="/profect/index.php/goods/delete?gid=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value]['gid'];?>
" class="btn btn-danger">删除</a></td>
                </tr>
            <?php }
}
?>

            </tbody>
        </table>
    </div>
</div>

</body>
</html><?php }
}
