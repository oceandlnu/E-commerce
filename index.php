<?php
require_once 'include.php';
$cates = getAllCate();
if (empty($cates)) {
    alertMes("不好意思，网站维护中！", "https://oceandlnu.github.io");
}
$smarty = new Setting_Smarty();
//$smarty->testInstall();
$smarty->assign('_SESSION', $_SESSION);
$smarty->assign('_COOKIE', $_COOKIE);
$smarty->assign('cates', $cates);
$smarty->registerPlugin('function', 'getProBycId', 'getProBycId');//注册php函数
$smarty->registerPlugin('function', 'getProImgById', 'getProImgById');//注册php函数
$smarty->registerPlugin('function', 'getSmallProBycId', 'getSmallProBycId');//注册php函数
$smarty->display('user/index.html');
?>