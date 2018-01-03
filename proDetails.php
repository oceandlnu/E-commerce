<?php
require_once 'include.php';
$id = $_REQUEST['id'];
$proInfo = getProById($id);
$proImgs = getProImgsById($id);
$_SESSION['loginFlag'] = !empty($_SESSION['loginFlag']) ? $_SESSION['loginFlag'] : null;
$_SESSION['username'] = !empty($_SESSION['username']) ? $_SESSION['username'] : null;
$_COOKIE['loginFlag'] = !empty($_COOKIE['loginFlag']) ? $_COOKIE['loginFlag'] : null;
$_COOKIE['username'] = !empty($_COOKIE['username']) ? $_COOKIE['username'] : null;
//var_dump($proImgs);
if (empty($proImgs)) {
    alertMes("商品图片错误", "index.php");
}
$smarty = new Setting_Smarty();
//$smarty->testInstall();
$smarty->assign('_SESSION', $_SESSION);
$smarty->assign('_COOKIE', $_COOKIE);
$smarty->assign('id', $id);
$smarty->assign('proInfo', $proInfo);
$smarty->assign('proImgs', $proImgs);
$smarty->display('user/proDetails.html');
?>
