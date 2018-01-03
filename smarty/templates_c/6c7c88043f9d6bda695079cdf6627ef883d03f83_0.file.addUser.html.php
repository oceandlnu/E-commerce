<?php
/* Smarty version 3.1.30, created on 2018-01-03 21:44:33
  from "/var/www/html/E-commerce/smarty/templates/admin/addUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4cde41ad5625_30883499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c7c88043f9d6bda695079cdf6627ef883d03f83' => 
    array (
      0 => '/var/www/html/E-commerce/smarty/templates/admin/addUser.html',
      1 => 1514984505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4cde41ad5625_30883499 (Smarty_Internal_Template $_smarty_tpl) {
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
<h3>添加用户</h3>
<form action="doAdminAction.php?act=addUser" method="post" enctype="multipart/form-data">
    <table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
        <tr>
            <td align="right">用户名</td>
            <td><input type="text" name="username" placeholder="请输入用户名"></td>
        </tr>
        <tr>
            <td align="right">密码</td>
            <td><input type="password" name="password" placeholder="请输入密码"></td>
        </tr>
        <tr>
            <td align="right">确认密码</td>
            <td><input type="password" name="confirmPwd" placeholder="请确认密码"></td>
        </tr>
        <tr>
            <td align="right">邮箱</td>
            <td><input type="email" name="email" placeholder="请输入管理员邮箱"></td>
        </tr>
        <tr>
            <td align="right">性别</td>
            <td><input type="radio" name="sex" value="男">男
                <input type="radio" name="sex" value="女">女
                <input type="radio" name="sex" value="保密" checked="checked">保密
            </td>
        </tr>
        <tr>
            <td align="right">头像</td>
            <td><input type="file" name="face"></td>
        </tr>
        <tr>
            <td align="right">操作</td>
            <td><input type="submit" value="添加用户"></td>
        </tr>
    </table>
</form>
</body>
</html><?php }
}
