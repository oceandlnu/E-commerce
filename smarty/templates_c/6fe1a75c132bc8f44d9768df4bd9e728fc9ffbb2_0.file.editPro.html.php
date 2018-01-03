<?php
/* Smarty version 3.1.30, created on 2018-01-03 21:51:54
  from "/var/www/html/E-commerce/smarty/templates/admin/editPro.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4cdffaf1da32_80737764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fe1a75c132bc8f44d9768df4bd9e728fc9ffbb2' => 
    array (
      0 => '/var/www/html/E-commerce/smarty/templates/admin/editPro.html',
      1 => 1514987513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4cdffaf1da32_80737764 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>编辑商品</title>
    <link href="styles/global.css" rel="stylesheet" type="text/css" media="all"/>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="../plugins/kindeditor/kindeditor.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="../plugins/kindeditor/lang/zh_CN.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="./scripts/jquery-1.6.4.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        KindEditor.ready(function (K) {
            window.editor = K.create('#editor_id');
        });
        $(document).ready(function () {
            $("#selectFileBtn").click(function () {
//                $fileField = $('<input type="file" name="thumbs[]" multiple="true" />');
                $fileField = $('<input type="file" name="thumbs[]" />');
                $fileField.hide();
                $("#attachList").append($fileField);
                $fileField.trigger("click");
                $fileField.change(function () {
                    $path = $(this).val();
                    $filename = $path.substring($path.lastIndexOf("\\") + 1);
                    $attachItem = $('<div class="attachItem"><div class="left">a.gif</div><div class="right"><a href="#" title="删除附件">删除</a></div></div>');
                    $attachItem.find(".left").html($filename);
                    $("#attachList").append($attachItem);
                });
            });
            $("#attachList>.attachItem").find('a').live('click', function (obj, i) {
                $(this).parents('.attachItem').prev('input').remove();
                $(this).parents('.attachItem').remove();
            });
        });
    <?php echo '</script'; ?>
>
</head>
<body>
<h3>添加商品</h3>
<form action="doAdminAction.php?act=editPro&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post" enctype="multipart/form-data">
    <table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
        <tr>
            <td align="right">商品名称</td>
            <td><input type="text" name="pName" value="<?php echo $_smarty_tpl->tpl_vars['proInfo']->value['pName'];?>
"/></td>
        </tr>
        <tr>
            <td align="right">商品分类</td>
            <td>
                <select name="cId">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['id'] == $_smarty_tpl->tpl_vars['proInfo']->value['id']) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value['cName'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </select>
            </td>
        </tr>
        <tr>
            <td align="right">商品货号</td>
            <td><input type="text" name="pSn" value="<?php echo $_smarty_tpl->tpl_vars['proInfo']->value['pSn'];?>
"/></td>
        </tr>
        <tr>
            <td align="right">商品数量</td>
            <td><input type="text" name="pNum" value="<?php echo $_smarty_tpl->tpl_vars['proInfo']->value['pNum'];?>
"/></td>
        </tr>
        <tr>
            <td align="right">商品市场价</td>
            <td><input type="text" name="mPrice" value="<?php echo $_smarty_tpl->tpl_vars['proInfo']->value['mPrice'];?>
"/></td>
        </tr>
        <tr>
            <td align="right">商品销售价</td>
            <td><input type="text" name="iPrice" value="<?php echo $_smarty_tpl->tpl_vars['proInfo']->value['iPrice'];?>
"/></td>
        </tr>
        <tr>
            <td align="right">商品描述</td>
            <td>
                <textarea name="pDesc" id="editor_id" style="width:100%;height:150px;"><?php echo $_smarty_tpl->tpl_vars['proInfo']->value['pDesc'];?>
</textarea>
            </td>
        </tr>
        <tr>
            <td align="right">商品图像</td>
            <td>
                <a href="javascript:void(0)" id="selectFileBtn">添加附件</a>
                <div id="attachList" class="clear"></div>
            </td>
        </tr>
        <tr>
            <td align="right">操作</td>
            <td><input type="submit" value="修改商品"/></td>
        </tr>
    </table>
</form>
</body>
</html><?php }
}
