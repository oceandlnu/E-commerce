<?php
require_once '../include.php';
$smarty = new Setting_Smarty();
//$smarty->testInstall();
$smarty->display('admin/login.html');
?>