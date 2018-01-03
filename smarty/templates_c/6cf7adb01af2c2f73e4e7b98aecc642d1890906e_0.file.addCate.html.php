<?php
/* Smarty version 3.1.30, created on 2018-01-03 21:44:30
  from "/var/www/html/E-commerce/smarty/templates/admin/addCate.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4cde3e537ff0_86802791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cf7adb01af2c2f73e4e7b98aecc642d1890906e' => 
    array (
      0 => '/var/www/html/E-commerce/smarty/templates/admin/addCate.html',
      1 => 1514984505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4cde3e537ff0_86802791 (Smarty_Internal_Template $_smarty_tpl) {
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
<h3>添加分类</h3>
<form action="doAdminAction.php?act=addCate" method="post">
    <table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
        <tr>
            <td align="right">分类名称</td>
            <td><input type="text" name="cName" placeholder="请输入分类名称"></td>
        </tr>
        <tr>
            <td align="right">操作</td>
            <td colspan="2"><input type="submit" value="添加分类"></td>
        </tr>
    </table>
</form>
</body>
</html><?php }
}
