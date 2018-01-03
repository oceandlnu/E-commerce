<?php
/* Smarty version 3.1.30, created on 2018-01-03 21:07:31
  from "/var/www/html/E-commerce/smarty/templates/admin/addAdmin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4cd5930887a2_04284479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eea79b688897dcb55926f489ac7e040a0a47c82a' => 
    array (
      0 => '/var/www/html/E-commerce/smarty/templates/admin/addAdmin.html',
      1 => 1514984505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4cd5930887a2_04284479 (Smarty_Internal_Template $_smarty_tpl) {
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
<h3>添加管理员</h3>
<form action="doAdminAction.php?act=addAdmin" method="post">
    <table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
        <tr>
            <td align="right">管理员名称</td>
            <td><input type="text" name="username" placeholder="请输入管理员名称"></td>
        </tr>
        <tr>
            <td align="right">管理员密码</td>
            <td><input type="password" name="password" placeholder="请输入密码"></td>
        </tr>
        <tr>
            <td align="right">管理员邮箱</td>
            <td><input type="text" name="email" placeholder="请输入管理员邮箱"></td>
        </tr>
        <tr>
            <td align="right">操作</td>
            <td colspan="2"><input type="submit" value="添加管理员"></td>
        </tr>
    </table>
</form>
</body>
</html><?php }
}
