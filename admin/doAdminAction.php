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
if ($act == "logout") {
    logout();
} elseif ($act == "addAdmin") {
    $mes = addAdmin();
} elseif ($act == "editAdmin") {
    $mes = editAdmin($id);
} elseif ($act == "delAdmin") {
    $mes = delAdmin($id);
} elseif ($act == "addCate") {
    $mes = addCate();
} elseif ($act == "editCate") {
    $mes = editCate($id);
} elseif ($act == "delCate") {
    $mes = delCate($id);
} elseif ($act == "addPro") {
    $mes = addPro();
} elseif ($act == "editPro") {
    $mes = editPro($id);
} elseif ($act == "delPro") {
    $mes = delPro($id);
} elseif ($act == "addUser") {
    $mes = addUser();
} elseif ($act == "editUser") {
    $mes = editUser($id);
} elseif ($act == "delUser") {
    $mes = delUser($id);
} elseif ($act == "waterText") {
    $mes = doWaterText($id);
} elseif ($act == "waterPic") {
    $mes = doWaterPic($id);
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if ($mes) {
    echo $mes;
}
?>
</body>
</html>
