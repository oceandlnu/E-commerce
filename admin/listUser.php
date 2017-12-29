<?php
require_once '../include.php';
checkLogined();
$page = !empty($_REQUEST['page']) ? (int)$_REQUEST['page'] : 1;
$pageSize = 2;
$table = "shop_user";
$sql = "select id from {$table}";
$totalRows = $GLOBALS['mysql']->getResultNum($sql);
$totalPage = ceil($totalRows / $pageSize);//得到总页码数
$rows = getUserByPage($page, $pageSize, $totalPage);
if (!$rows) {
    alertMes("抱歉，没有用户，请添加！", "addUser.php");
    exit;
}
?>
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
        <?php foreach ($rows as $row): ?>
            <tr>
                <td><input type="checkbox" id="<?php echo $row['id']; ?>" class="check"><label for="<?php echo $row['id']; ?>" class="label"><?php echo $row['id']; ?></label></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['sex']; ?></td>
                <td><?php echo ($row['activeFlag']==0)?"未激活":"已激活"; ?></td>
                <td align="center"><input type="button" value="修改" class="btn"
                                          onclick="editUser(<?php echo $row['id']; ?>)"><input type="button" value="删除"
                                                                                                class="btn"
                                                                                                onclick="delUser(<?php echo $row['id']; ?>)">
                </td>
            </tr>
        <?php endforeach; ?>
        <?php if ($totalRows > $pageSize){ ?>
        <tr>
            <td colspan="6"><?php echo showPage($page, $totalPage);
                } ?></td>
        </tr>
        </tbody>
    </table>
</div>
<script type="text/javascript">
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
</script>
</body>
</html>