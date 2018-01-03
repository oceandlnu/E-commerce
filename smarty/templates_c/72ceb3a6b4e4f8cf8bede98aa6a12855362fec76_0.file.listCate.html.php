<?php
/* Smarty version 3.1.30, created on 2018-01-03 21:07:26
  from "/var/www/html/E-commerce/smarty/templates/admin/listCate.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4cd58ec433d2_39971495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72ceb3a6b4e4f8cf8bede98aa6a12855362fec76' => 
    array (
      0 => '/var/www/html/E-commerce/smarty/templates/admin/listCate.html',
      1 => 1514984505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4cd58ec433d2_39971495 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>分类列表</title>
    <link rel="stylesheet" href="styles/backstage.css">
</head>
<body>
<div class="details">
    <div class="details_operation clearfix">
        <div class="bui_select">
            <input type="button" value="添&nbsp;&nbsp;加" class="add" onclick="addCate()">
        </div>
    </div>
    <!--表格-->
    <table class="table" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th width="15%">编号</th>
            <th width="25%">分类</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
        <tr>
            <td><input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="check"><label for="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"
                                                                           class="label"><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</label></td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['cName'];?>
</td>
            <td align="center"><input type="button" value="修改" class="btn"
                                      onclick="editCate(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)"><input type="button" value="删除"
                                                                           class="btn"
                                                                           onclick="delCate(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)">
            </td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php if ($_smarty_tpl->tpl_vars['totalRows']->value > $_smarty_tpl->tpl_vars['pageSize']->value) {?>
        <tr>
            <td colspan="4"><?php echo $_smarty_tpl->tpl_vars['showPage']->value;?>
</td>
        </tr>
        <?php }?>
        </tbody>
    </table>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    function addCate() {
        window.location = "addCate.php";
    }

    function editCate(id) {
        window.location = "editCate.php?id=" + id;
    }

    function delCate(id) {
        if (window.confirm("确定要删除吗?删除之后不可恢复")) {
            window.location = "doAdminAction.php?act=delCate&id=" + id;
        }
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
