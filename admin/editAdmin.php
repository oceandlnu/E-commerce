<?php
require_once '../include.php';
$id=$_REQUEST['id'];
$sql="select id,username,password,email from shop_admin where id='{$id}'";
$mysql=new mysql();
$row=$mysql->fetchOne($sql);
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>编辑管理员</h3>
<form action="doAdminAction.php?act=editAdmin&id=<?php echo $id;?>" method="post">
    <table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
        <tr>
            <td align="right">管理员名称</td>
            <td><input type="text" name="username" value="<?php echo $row['username'];?>"></td>
        </tr>
        <tr>
            <td align="right">管理员密码</td>
            <td><input type="password" name="password" value="<?php echo $row['password'];?>"></td>
        </tr>
        <tr>
            <td align="right">管理员邮箱</td>
            <td><input type="text" name="email" value="<?php echo $row['email'];?>"></td>
        </tr>
        <tr>
            <td align="right">操作</td>
            <td colspan="2"><input type="submit" value="提交修改"></td>
        </tr>
    </table>
</form>
</body>
</html>