<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 17-12-24
 * Time: 上午11:49
 */
require_once '../include.php';
$act=$_REQUEST['act'];
if ($act == "logout"){
    logout();
}elseif ($act=="addAdmin"){
    $mes=addAdmin();
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
if ($mes){
    echo $mes;
}
?>
</body>
</html>
