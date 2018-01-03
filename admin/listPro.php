<?php
require_once '../include.php';
checkLogined();
$page = !empty($_REQUEST['page']) ? (int)$_REQUEST['page'] : 1;
$keywords = !empty($_REQUEST['keywords']) ? $_REQUEST['keywords'] : null;
$where = $keywords ? "where p.pName like '%{$keywords}%'" : null;
$order = !empty($_REQUEST['order']) ? $_REQUEST['order'] : null;
$orderBy = $order ? "order by p." . $order : null;
$pageSize = 2;
$sql = "select id from shop_pro as p {$where}";
$totalRows = $GLOBALS['mysql']->getResultNum($sql);
$totalPage = ceil($totalRows / $pageSize);//得到总页码数
$rows = getProByPage($page, $pageSize, $totalPage, $where, $orderBy);
$showPage = showPage($page, $totalPage, "keywords={$keywords}&order={$order}");
if (!$rows) {
    alertMes("抱歉，没有商品，请添加！", "addPro.php");
    exit;
}
$smarty = new Setting_Smarty();
//$smarty->testInstall();
$smarty->assign('rows', $rows);
$smarty->assign('totalRows', $totalRows);
$smarty->assign('pageSize', $pageSize);
$smarty->assign('showPage', $showPage);
$smarty->registerPlugin('function','getImgByProId', 'getImgByProId');//注册php函数
$smarty->display('admin/listPro.html');
?>