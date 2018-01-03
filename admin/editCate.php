<?php
require_once '../include.php';
checkLogined();
$id=$_REQUEST['id'];
$row=getCateById($id);
$smarty = new Setting_Smarty();
//$smarty->testInstall();
$smarty->assign('id', $id);
$smarty->assign('row', $row);
$smarty->display('admin/editCate.html');
?>
