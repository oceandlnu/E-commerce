<?php
require_once '../include.php';
checkLogined();
$page = $_REQUEST['page'] ? (int)$_REQUEST['page'] : 1;
$keywords = $_REQUEST['keywords'] ? $_REQUEST['keywords'] : null;
$where = $keywords ? "where p.pName like '%{$keywords}%'" : null;
$order = $_REQUEST['order'] ? $_REQUEST['order'] : null;
$orderBy = $order ? "order by p." . $order : null;
$pageSize = 2;
$sql = "select id from shop_pro as p {$where}";
$totalRows = $GLOBALS['mysql']->getResultNum($sql);
$totalPage = ceil($totalRows / $pageSize);//得到总页码数
$rows = getProByPage($page, $pageSize, $totalPage, $where, $orderBy);
if (!$rows) {
    alertMes("抱歉，没有商品，请添加！", "addPro.php");
    exit;
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>商品列表</title>
    <link rel="stylesheet" href="styles/backstage.css">
    <link rel="stylesheet" href="scripts/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css"/>
    <script src="scripts/jquery-ui/js/jquery-1.10.2.js"></script>
    <script src="scripts/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    <script src="scripts/jquery-ui/js/jquery-ui-1.10.4.custom.min.js"></script>
</head>

<body>
<div class="details">
    <div class="details_operation clearfix">
        <div class="bui_select">
            <input type="button" value="添&nbsp;&nbsp;加" class="add" onclick="addPro()">
        </div>
        <div class="fr">
            <div class="text">
                <span>商品价格：</span>
                <div class="bui_select">
                    <select name="" id="" class="select" onchange="change(this.value)">
                        <option value="">-请选择-</option>
                        <option value="iPrice asc">由低到高</option>
                        <option value="iPrice desc">由高到低</option>
                    </select>
                </div>
            </div>
            <div class="text">
                <span>上架时间：</span>
                <div class="bui_select">
                    <select name="" id="" class="select" onchange="change(this.value)">
                        <option value="">-请选择-</option>
                        <option value="pubTime desc">最新发布</option>
                        <option value="pubTime asc">历史发布</option>
                    </select>
                </div>
            </div>
            <div class="text">
                <span>搜索</span>
                <input type="text" value="" class="search" id="search" onkeypress="search()" placeholder="请输入商品名称">
            </div>
        </div>
    </div>
    <!--表格-->
    <table class="table" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th width="10%">编号</th>
            <th width="20%">商品名称</th>
            <th width="40%">商品图片</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($rows as $row): ?>
            <tr>
                <td><input type="checkbox" id="<?php echo $row['id']; ?>" class="check"><label
                            for="<?php echo $row['id']; ?>" class="label"><?php echo $row['id']; ?></label></td>
                <td><?php echo $row['pName']; ?></td>
                <td>
                    <?php
                    $proImgs = getAllImgByProId($row['id']);
                    foreach ($proImgs as $img):
                        ?>
                        <img width="100" height="100" src="../images/uploads/<?php echo $img['albumPath']; ?>"
                             alt=""/> &nbsp;&nbsp;
                    <?php endforeach; ?>
                </td>
                <td>
                    <input type="button" value="添加文字水印" onclick="doImg('<?php echo $row['id']; ?>','waterText')"
                           class="btn"/>
                    <input type="button" value="添加图片水印" onclick="doImg('<?php echo $row['id']; ?>','waterPic')"
                           class="btn"/>
                </td>
            </tr>
        <?php endforeach; ?>
        <?php if ($totalRows > $pageSize){ ?>
        <tr>
            <td colspan="7"><?php echo showPage($page, $totalPage, "keywords={$keywords}&order={$order}");
                } ?></td>
        </tr>
        </tbody>
    </table>
</div>
<script type="text/javascript">

    function addPro() {
        window.location = 'addPro.php';
    }

    function search() {
        if (event.keyCode === 13) {
            var val = document.getElementById("search").value;
            window.location = "listPro.php?keywords=" + val;
        }
    }

    function change(val) {
        window.location = "listPro.php?order=" + val;
    }

    function doImg(id, act) {
        window.location = "doAdminAction.php?act=" + act + "&id=" + id;
    }
</script>
</body>
</html>