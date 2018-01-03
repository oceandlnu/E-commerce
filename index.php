<?php
require_once 'include.php';
$cates = getAllCate();
if (empty($cates)) {
    alertMes("不好意思，网站维护中！", "https://oceandlnu.github.io");
}
$_SESSION['loginFlag'] = !empty($_SESSION['loginFlag']) ? $_SESSION['loginFlag'] : null;
$_SESSION['username'] = !empty($_SESSION['username']) ? $_SESSION['username'] : null;
$_COOKIE['loginFlag'] = !empty($_COOKIE['loginFlag']) ? $_COOKIE['loginFlag'] : null;
$_COOKIE['username'] = !empty($_COOKIE['username']) ? $_COOKIE['username'] : null;
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