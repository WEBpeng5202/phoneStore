<?php
/* Smarty version 3.1.30, created on 2018-02-06 08:03:32
  from "H:\wamp\wamp64\www\profect\App\view\manage_goods_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7961545100a5_45921985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a715ba3de609f72d6fe8573d1409c0b0f0951077' => 
    array (
      0 => 'H:\\wamp\\wamp64\\www\\profect\\App\\view\\manage_goods_add.html',
      1 => 1517904201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/public_left.html' => 1,
  ),
),false)) {
function content_5a7961545100a5_45921985 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/public_left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PLUG_PATH;?>
ueditor/ueditor.config.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo PLUG_PATH;?>
ueditor/ueditor.all.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo PLUG_PATH;?>
ueditor/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
<style>
    form {
        width: 100%;
        height: calc(100% - 80px);
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .form-group {
        width: 45%;
    }
</style>
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
                <label class="sr-only" for="exampleInputType">Amount (in dollars)</label>
                <div class="input-group">
                    <div class="input-group-addon">商品种类</div>
                    <select class="form-control" id="exampleInputType" placeholder="商品" name="cid">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
[<?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
]</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="sr-only" for="exampleInputName">Amount (in dollars)</label>
                <div class="input-group">
                    <div class="input-group-addon">商品名称</div>
                    <input type="text" class="form-control" id="exampleInputName" placeholder="商品名称" name="gname">
                </div>
            </div>
            <div class="form-group">
                <label class="sr-only" for="exampleInputActivity">Amount (in dollars)</label>
                <div class="input-group">
                    <div class="input-group-addon">商品活动</div>
                    <input type="text" class="form-control" id="exampleInputActivity" placeholder="商品活动"
                           name="gactivity">
                </div>
            </div>
            <div class="form-group">
                <label class="sr-only" for="exampleInputLabel">Amount (in dollars)</label>
                <div class="input-group">
                    <div class="input-group-addon">商品标签</div>
                    <input type="text" class="form-control" id="exampleInputLabel" placeholder="商品标签" title="(需用‘/’隔开)"
                           name="gtab">
                </div>
            </div>
            <div class="form-group">
                <label class="sr-only" for="exampleInputOpc">Amount (in dollars)</label>
                <div class="input-group">
                    <div class="input-group-addon">商品原价</div>
                    <input type="number" class="form-control" id="exampleInputOpc" placeholder="商品原价" value="0.00"
                           step="0.01" name="gopc">
                </div>
            </div>
            <div class="form-group">
                <label class="sr-only" for="exampleInputPrice">Amount (in dollars)</label>
                <div class="input-group">
                    <div class="input-group-addon">商品现价</div>
                    <input type="number" class="form-control" id="exampleInputPrice" placeholder="商品现价" step="0.01"
                           value="0.00" name="gprice">
                </div>
            </div>
            <div class="form-group">
                <label class="sr-only" for="exampleInputColor">Amount (in dollars)</label>
                <div class="input-group">
                    <div class="input-group-addon">商品颜色</div>
                    <input type="text" class="form-control" id="exampleInputColor" placeholder="商品颜色" name="gcolor">
                </div>
            </div>
            <div class="form-group">
                <label class="sr-only" for="exampleInputMarque">Amount (in dollars)</label>
                <div class="input-group">
                    <div class="input-group-addon">商品型号</div>
                    <input type="text" class="form-control" id="exampleInputMarque" placeholder="商品型号" name="gtype">
                </div>
            </div>
            <div class="form-group">
                <label class="sr-only" for="exampleInputServer">Amount (in dollars)</label>
                <div class="input-group">
                    <div class="input-group-addon">商品服务</div>
                    <select class="form-control" id="exampleInputServer" placeholder="商品" name="gserver">
                        <option value="支持七天无理由退货">支持七天无理由退货</option>
                        <option value="72小时发货">72小时发货</option>
                        <option value="48小时发货">48小时发货</option>
                        <option value="24小时发货">24小时发货</option>
                        <option value="运费险">运费险</option>
                        <option value="包邮">包邮</option>
                    </select>
                </div>
            </div>
            <div class="form-group thumb">
                <label class="sr-only" for="exampleInputThumb">Amount (in dollars)</label>
                <div class="input-group">
                    <div class="input-group-addon">商品小图</div>
                    <input type="file" class="form-control" id="exampleInputThumb" placeholder="商品小图">
                </div>
                <input type="hidden" class="thumb-hidden" name="gthumb">
            </div>
            <div class="form-group">
                <label class="sr-only" for="exampleInputImage">Amount (in dollars)</label>
                <div class="input-group">
                    <div class="input-group-addon">商品展图</div>
                    <input type="file" class="form-control" id="exampleInputImage" placeholder="商品展图" multiple>
                </div>
                <div class="image"
                     style="max-height: 200px;width: 100%;display: flex;flex-wrap: wrap;justify-content: space-around"></div>
                <input type="hidden" name="gimage" class="gimage-hidden">
            </div>

            <input type="hidden" class="gcontent" name="gcontent">

        </form>
        <div id="container" name="content" type="text/plain"></div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
goods_add.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
