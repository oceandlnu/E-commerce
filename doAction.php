<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 17-12-28
 * Time: 下午7:49
 */
require_once 'include.php';
$act = $_REQUEST['act'];
if ($act === "reg") {
    $mes = reg();
} elseif ($act === "login") {
    $mes = login();
} elseif ($act === "userOut") {
    userOut();
}
$mes = !empty($mes) ? $mes : null;
$smarty = new Setting_Smarty();
//$smarty->testInstall();
$smarty->assign('mes', $mes);
$smarty->display('user/doAction.html');
?>