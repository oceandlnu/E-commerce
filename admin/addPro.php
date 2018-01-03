<?php
require_once '../include.php';
checkLogined();
$rows = getAllCate();
if (!$rows) {
    alertMes("没有相应分类，请先添加分类!!", "addCate.php");
}
$smarty = new Setting_Smarty();
//$smarty->testInstall();
$smarty->assign('rows', $rows);
$smarty->display('admin/addPro.html');
?>