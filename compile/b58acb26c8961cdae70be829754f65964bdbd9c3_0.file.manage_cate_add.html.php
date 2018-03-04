<?php
/* Smarty version 3.1.30, created on 2018-02-06 08:00:51
  from "H:\wamp\wamp64\www\profect\App\view\manage_cate_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7960b3a12241_07352553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b58acb26c8961cdae70be829754f65964bdbd9c3' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\profect\\App\\view\\manage_cate_add.html',
      1 => 1517904050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/public_left.html' => 1,
  ),
),false)) {
function content_5a7960b3a12241_07352553 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/public_left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
manger.js"><?php echo '</script'; ?>
>
<div class="content">
    <div class="fixed">
        <div class="userImg">
            <img src="<?php echo IMG_PATH;?>
username.png" alt="" class="img-thumbnail">
        </div>
    </div>
    <div class="con">
        <form>
            <div class="form-group">
                <label>父级分类</label>
                <select class="form-control" name="pid">
                    <option value="0">父级分类</option>
                    <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputCname">分类名称</label>
                <input type="text" class="form-control" id="exampleInputCname" placeholder="分类名称" name="cname">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">
                <p class="help-block">Example block-level help text here.</p>
            </div>
            <input type="hidden" name="cthumb">

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>

</body>
</html><?php }
}
