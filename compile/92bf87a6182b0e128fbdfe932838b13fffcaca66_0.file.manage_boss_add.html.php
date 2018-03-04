<?php
/* Smarty version 3.1.30, created on 2018-02-06 08:03:09
  from "H:\wamp\wamp64\www\profect\App\view\manage_boss_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a79613d62db42_99163036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92bf87a6182b0e128fbdfe932838b13fffcaca66' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\profect\\App\\view\\manage_boss_add.html',
      1 => 1517904179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/public_left.html' => 1,
  ),
),false)) {
function content_5a79613d62db42_99163036 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/public_left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
boss.js"><?php echo '</script'; ?>
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
                <label for="exampleInputCname">店铺名称</label>
                <input type="text" class="form-control" id="exampleInputCname" placeholder="店铺名称" name="bname">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">店铺头像</label>
                <input type="file" id="exampleInputFile">
                <p class="help-block">Example block-level help text here.</p>
            </div>
            <input type="hidden" name="bthumb">
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>

</body>
</html><?php }
}
