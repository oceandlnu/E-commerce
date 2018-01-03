<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 17-12-24
 * Time: 上午11:49
 */
require_once '../include.php';
$act = $_REQUEST['act'];
$id = null;
if (!empty($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
}
switch ($act) {
    case "logout":
        logout();
        break;
    case "addAdmin":
        $mes = addAdmin();
        break;
    case "editAdmin":
        $mes = editAdmin($id);
        break;
    case "delAdmin":
        $mes = delAdmin($id);
        break;
    case "addCate":
        $mes = addCate();
        break;
    case "editCate":
        $mes = editCate($id);
        break;
    case "delCate":
        $mes = delCate($id);
        break;
    case "addPro":
        $mes = addPro();
        break;
    case "editPro":
        $mes = editPro($id);
        break;
    case "delPro":
        $mes = delPro($id);
        break;
    case "addUser":
        $mes = addUser();
        break;
    case "editUser":
        $mes = editUser($id);
        break;
    case "delUser":
        $mes = delUser($id);
        break;
    case "waterText":
        $mes = doWaterText($id);
        break;
    case "waterPic":
        $mes = doWaterPic($id);
        break;
    default:
        $mes = "Input Error";
        break;
}
$mes = !empty($mes) ? $mes : null;
$smarty = new Setting_Smarty();
//$smarty->testInstall();
$smarty->assign('mes', $mes);
$smarty->display('admin/doAdminAction.html');
?>

