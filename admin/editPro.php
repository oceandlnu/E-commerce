<?php
require_once '../include.php';
checkLogined();
$rows = getAllCate();
if (!$rows) {
    alertMes("没有相应分类，请先添加分类!!", "addCate.php");
}
$id=$_REQUEST['id'];
$proInfo=getProById($id);
$smarty = new Setting_Smarty();
//$smarty->testInstall();
$smarty->assign('id', $id);
$smarty->assign('rows', $rows);
$smarty->assign('proInfo', $proInfo);
$smarty->display('admin/editPro.html');
?>