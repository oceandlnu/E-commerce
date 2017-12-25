<?php
require_once '../include.php';
$page = $_REQUEST['page'] ? (int)$_REQUEST['page'] : 1;
$pageSize = 2;
$sql = "select id from shop_cate";
$mysql = new mysql();
$totalRows = $mysql->getResultNum($sql);
$totalPage = ceil($totalRows / $pageSize);//得到总页码数
$rows = getCateByPage($page, $pageSize, $totalPage);
if (!$rows) {
    alertMes("抱歉，没有分类，请添加！", "addCate.php");
    exit;
}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>分类列表</title>
    <link rel="stylesheet" href="styles/backstage.css">
</head>
<body>
<div class="details">
    <div class="details_operation clearfix">
        <div class="bui_select">
            <input type="button" value="添&nbsp;&nbsp;加" class="add" onclick="addCate()">
        </div>
    </div>
    <!--表格-->
    <table class="table" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th width="15%">编号</th>
            <th width="25%">分类</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($rows as $row): ?>
            <tr>
                <!--这里的id和for里面的c1 需要循环出来-->
                <td><input type="checkbox" id="c1" class="check"><label for="c1"
                                                                        class="label"><?php echo $row['id']; ?></label>
                </td>
                <td><?php echo $row['cName']; ?></td>
                <td align="center"><input type="button" value="修改" class="btn"
                                          onclick="editCate(<?php echo $row['id']; ?>)"><input type="button" value="删除"
                                                                                               class="btn"
                                                                                               onclick="delCate(<?php echo $row['id']; ?>)">
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
    function addCate() {
        window.location = "addCate.php";
    }

    function editCate(id) {
        window.location = "editCate.php?id=" + id;
    }

    function delCate(id) {
        if (window.confirm("确定要删除吗?删除之后不可恢复")) {
            window.location = "doAdminAction.php?act=delCate&id=" + id;
        }
    }
</script>
</body>
</html>