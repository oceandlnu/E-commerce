<?php
require_once '../include.php';
checkLogined();
$id=$_REQUEST['id'];
$sql="select id,username,password,email from shop_admin where id='{$id}'";
$row=$GLOBALS['mysql']->fetchOne($sql);
$smarty = new Setting_Smarty();
//$smarty->testInstall();
$smarty->assign('id', $id);
$smarty->assign('row', $row);
$smarty->display('admin/editAdmin.html');
?>
