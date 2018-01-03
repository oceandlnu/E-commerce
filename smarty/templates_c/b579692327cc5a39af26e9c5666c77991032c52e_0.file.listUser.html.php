<?php
/* Smarty version 3.1.30, created on 2018-01-03 21:07:32
  from "/var/www/html/E-commerce/smarty/templates/admin/listUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4cd594e75880_68299254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b579692327cc5a39af26e9c5666c77991032c52e' => 
    array (
      0 => '/var/www/html/E-commerce/smarty/templates/admin/listUser.html',
      1 => 1514984505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4cd594e75880_68299254 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>用户列表</title>
    <link rel="stylesheet" href="styles/backstage.css">
</head>
<body>
<div class="details">
    <div class="details_operation clearfix">
        <div class="bui_select">
            <input type="button" value="添&nbsp;&nbsp;加" class="add" onclick="addUser()">
        </div>

    </div>
    <!--表格-->
    <table class="table" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th width="15%">编号</th>
            <th width="20%">用户名</th>
            <th width="20%">邮箱</th>
            <th width="10%">性别</th>
            <th width="10%">激活状态</th>
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
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['sex'];?>
</td>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['row']->value['activeFlag'] == 1) {?>
                激活
                <?php } else { ?>
                未激活
                <?php }?>
            </td>
            <td align="center">
                <input type="button" value="修改" class="btn" onclick="editUser(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)">
                <input type="button" value="删除" class="btn" onclick="delUser(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
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
            <td colspan="6"><?php echo $_smarty_tpl->tpl_vars['showPage']->value;?>
</td>
        </tr>
        <?php }?>
        </tbody>
    </table>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    function addUser() {
        window.location = "addUser.php";
    }

    function editUser(id) {
        window.location = "editUser.php?id=" + id;
    }

    function delUser(id) {
        if (window.confirm("确定要删除吗?删除之后不可恢复")) {
            window.location = "doAdminAction.php?act=delUser&id=" + id;
        }
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
