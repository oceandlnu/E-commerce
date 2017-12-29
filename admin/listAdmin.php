<?php
require_once '../include.php';
checkLogined();
$page = $_REQUEST['page'] ? (int)$_REQUEST['page'] : 1;
$pageSize = 2;
$table = "shop_admin";
$sql = "select id from {$table}";
$totalRows = $GLOBALS['mysql']->getResultNum($sql);
$totalPage = ceil($totalRows / $pageSize);//得到总页码数
$rows = getAdminByPage($page, $pageSize, $totalPage);
if (!$rows) {
    alertMes("抱歉，没有管理员，请添加！", "addAdmin.php");
    exit;
}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>管理员列表</title>
    <link rel="stylesheet" href="styles/backstage.css">
</head>
<body>
<div class="details">
    <div class="details_operation clearfix">
        <div class="bui_select">
            <input type="button" value="添&nbsp;&nbsp;加" class="add" onclick="addAdmin()">
        </div>

    </div>
    <!--表格-->
    <table class="table" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th width="15%">编号</th>
            <th width="25%">管理员名称</th>
            <th width="30%">管理员邮箱</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($rows as $row): ?>
            <tr>
                <td><input type="checkbox" id="<?php echo $row['id']; ?>" class="check"><label for="<?php echo $row['id']; ?>" class="label"><?php echo $row['id']; ?></label></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td align="center"><input type="button" value="修改" class="btn"
                                          onclick="editAdmin(<?php echo $row['id']; ?>)"><input type="button" value="删除"
                                                                                                class="btn"
                                                                                                onclick="delAdmin(<?php echo $row['id']; ?>)">
                </td>
            </tr>
        <?php endforeach; ?>
        <?php if ($totalRows > $pageSize){ ?>
        <tr>
            <td colspan="4"><?php echo showPage($page, $totalPage);
                } ?></td>
        </tr>
        </tbody>
    </table>
</div>
<script type="text/javascript">
    function addAdmin() {
        window.location = "addAdmin.php";
    }

    function editAdmin(id) {
        window.location = "editAdmin.php?id=" + id;
    }

    function delAdmin(id) {
        if (window.confirm("确定要删除吗?删除之后不可恢复")) {
            window.location = "doAdminAction.php?act=delAdmin&id=" + id;
        }
    }
</script>
</body>
</html>