<?php
require_once '../include.php';
$smarty = new Setting_Smarty();
//$smarty->testInstall();
$smarty->assign('PHP_OS', PHP_OS);
$smarty->assign('PHP_VERSION', PHP_VERSION);
$smarty->assign('PHP_SAPI', PHP_SAPI);
$smarty->display('admin/main.html');
?>