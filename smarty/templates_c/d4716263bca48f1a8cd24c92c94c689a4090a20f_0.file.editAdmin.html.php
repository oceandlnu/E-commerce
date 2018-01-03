<?php
/* Smarty version 3.1.30, created on 2018-01-03 21:52:56
  from "/var/www/html/E-commerce/smarty/templates/admin/editAdmin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4ce038d86171_64402189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4716263bca48f1a8cd24c92c94c689a4090a20f' => 
    array (
      0 => '/var/www/html/E-commerce/smarty/templates/admin/editAdmin.html',
      1 => 1514984505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4ce038d86171_64402189 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>编辑管理员</h3>
<form action="doAdminAction.php?act=editAdmin&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post">
    <table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
        <tr>
            <td align="right">管理员名称</td>
            <td><input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
"></td>
        </tr>
        <tr>
            <td align="right">管理员密码</td>
            <td><input type="password" name="password" placeholder="请输入新密码"></td>
        </tr>
        <tr>
            <td align="right">管理员邮箱</td>
            <td><input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
"></td>
        </tr>
        <tr>
            <td align="right">操作</td>
            <td colspan="2"><input type="submit" value="提交修改"></td>
        </tr>
    </table>
</form>
</body>
</html><?php }
}
