<?php
/* Smarty version 3.1.30, created on 2018-02-27 08:05:45
  from "H:\wamp\wamp64\www\profect\App\view\manage_cate_show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a951159f2eb82_64928770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '036eeaf6400802e18eb44e8ce4484e37db15f386' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\profect\\App\\view\\manage_cate_show.html',
      1 => 1519718440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/public_left.html' => 1,
  ),
),false)) {
function content_5a951159f2eb82_64928770 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/public_left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
cate_show.js"><?php echo '</script'; ?>
>
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
                    <th class="active">分类ID</th>
                    <th class="success">分类名称</th>
                    <th class="info">分类缩略图</th>
                    <th class="warning">分类对应父级分类ID（pid）</th>
                    <th class="danger">操作</th>
                </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['str']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <tr data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">
                    <td class="active"><?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
</td>
                    <td class="success"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
" data-type="cname"></td>
                    <td class="info"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['cthumb'];?>
" alt="" class="img-thumbnail" style="width: 100px"></td>
                    <td class="warning"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
" data-type="pid"></td>
                    <td class="danger"><button class="btn btn-danger">删除</button></td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </tbody>
        </table>
    </div>
</div>
</body>
</html><?php }
}
