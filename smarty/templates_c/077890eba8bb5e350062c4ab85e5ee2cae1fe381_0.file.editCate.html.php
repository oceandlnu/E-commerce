<?php
/* Smarty version 3.1.30, created on 2018-01-03 21:52:31
  from "/var/www/html/E-commerce/smarty/templates/admin/editCate.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4ce01f961800_83848840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '077890eba8bb5e350062c4ab85e5ee2cae1fe381' => 
    array (
      0 => '/var/www/html/E-commerce/smarty/templates/admin/editCate.html',
      1 => 1514984505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4ce01f961800_83848840 (Smarty_Internal_Template $_smarty_tpl) {
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
<h3>编辑分类</h3>
<form action="doAdminAction.php?act=editCate&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post">
    <table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
        <tr>
            <td align="right">分类名称</td>
            <td><input type="text" name="cName" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['cName'];?>
"></td>
        </tr>
        <tr>
            <td align="right">操作</td>
            <td><input type="submit" value="提交修改"></td>
        </tr>
    </table>
</form>
</body>
</html><?php }
}
