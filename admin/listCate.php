<?php
require_once '../include.php';
checkLogined();
$page = !empty($_REQUEST['page']) ? (int)$_REQUEST['page'] : 1;
$pageSize = 2;
$table = "shop_cate";
$sql = "select id from {$table}";
$totalRows = $GLOBALS['mysql']->getResultNum($sql);
$totalPage = ceil($totalRows / $pageSize);//得到总页码数
$rows = getCateByPage($page, $pageSize, $totalPage);
$showPage = showPage($page, $totalPage);
if (!$rows) {
    alertMes("抱歉，没有分类，请添加！", "addCate.php");
    exit;
}
$smarty = new Setting_Smarty();
//$smarty->testInstall();
$smarty->assign('rows', $rows);
$smarty->assign('totalRows', $totalRows);
$smarty->assign('pageSize', $pageSize);
$smarty->assign('showPage', $showPage);
$smarty->display('admin/listCate.html');
?>
