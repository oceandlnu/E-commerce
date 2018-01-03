<?php
require_once '../include.php';
checkLogined();
$_SESSION['adminName'] = !empty($_SESSION['adminName']) ? $_SESSION['adminName'] : null;
$_COOKIE['adminName'] = !empty($_COOKIE['adminName']) ? $_COOKIE['adminName'] : null;
$smarty = new Setting_Smarty();
//$smarty->testInstall();
$smarty->assign('_SESSION', $_SESSION);
$smarty->assign('_COOKIE', $_COOKIE);
$smarty->display('admin/index.html');
?>