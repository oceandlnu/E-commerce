<?php
require_once '../include.php';
checkLogined();
$smarty = new Setting_Smarty();
//$smarty->testInstall();
$smarty->assign('_SESSION', $_SESSION);
$smarty->assign('_COOKIE', $_COOKIE);
$smarty->display('admin/index.html');
?>