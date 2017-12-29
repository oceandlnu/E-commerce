<?php
require_once '../include.php';
checkLogined();
$id = $_REQUEST['id'];
$sql = "select id,username,password,email,sex from shop_user where id='{$id}'";
$row = $GLOBALS['mysql']->fetchOne($sql);
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
<h3>编辑用户</h3>
<form action="doAdminAction.php?act=editUser&id=<?php echo $id; ?>" method="post">
    <table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
        <tr>
            <td align="right">用户名</td>
            <td><input type="text" name="username" value="<?php echo $row['username']; ?>"></td>
        </tr>
        <tr>
            <td align="right">密码</td>
            <td><input type="password" name="password" placeholder="请输入新密码"></td>
        </tr>
        <tr>
            <td align="right">邮箱</td>
            <td><input type="text" name="email" value="<?php echo $row['email']; ?>"></td>
        </tr>
        <tr>
            <td align="right">性别</td>
            <td><input type="radio" name="sex"
                       value="男" <?php echo $row['sex'] == "男" ? "checked=\"checked\"" : null; ?>>男
                <input type="radio" name="sex"
                       value="女" <?php echo $row['sex'] == "女" ? "checked=\"checked\"" : null; ?>>女
                <input type="radio" name="sex"
                       value="保密" <?php echo $row['sex'] == "保密" ? "checked=\"checked\"" : null; ?>>保密
            </td>
        </tr>
        <tr>
            <td align="right">操作</td>
            <td colspan="2"><input type="submit" value="提交修改"></td>
        </tr>
    </table>
</form>
</body>
</html>