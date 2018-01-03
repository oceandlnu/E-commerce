<?php
require_once '../include.php';
checkLogined();
$smarty = new Setting_Smarty();
//$smarty->testInstall();
$smarty->display('admin/addAdmin.html');
?>