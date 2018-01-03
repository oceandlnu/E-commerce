<?php
/* Smarty version 3.1.30, created on 2018-01-03 21:07:23
  from "/var/www/html/E-commerce/smarty/templates/admin/main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4cd58b595c86_41917704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35124b10e9079688500c4a751d30ae48ab749ffc' => 
    array (
      0 => '/var/www/html/E-commerce/smarty/templates/admin/main.html',
      1 => 1514984505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4cd58b595c86_41917704 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Insert title here</title>
</head>
<body>
<center>
    <h3>系统信息</h3>
    <table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
        <tr>
            <th>操作系统</th>
            <td><?php echo $_smarty_tpl->tpl_vars['PHP_OS']->value;?>
</td>
        </tr>
        <tr>
            <th>PHP版本</th>
            <td><?php echo $_smarty_tpl->tpl_vars['PHP_VERSION']->value;?>
</td>
        </tr>
        <tr>
            <th>运行方式</th>
            <td><?php echo $_smarty_tpl->tpl_vars['PHP_SAPI']->value;?>
</td>
        </tr>
    </table>
    <h3>软件信息</h3>
    <table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
        <tr>
            <th>系统名称</th>
            <td>电子商城</td>
        </tr>
        <tr>
            <th>开发团队</th>
            <td>Ocean</td>
        </tr>
        <tr>
            <th>公司网址</th>
            <td><a style="color: black" href="http://39.108.167.55:8888/E-commerce">http://39.108.167.55:8888/E-commerce</a></td>
        </tr>
    </table>
</center>
</body>
</html><?php }
}
