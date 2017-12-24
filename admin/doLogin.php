<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 17-12-23
 * Time: 下午1:29
 */
require_once '../include.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
$verify = $_POST['verify'];
$verify_1 = $_SESSION['verify'];
if ($verify == $verify_1){
    $sql="select * from shop_admin where username='{$username}' and password='{$password}'";
    $row=checkAdmin($sql);
    if ($row){
        $_SESSION['adminName']=$row['username'];
        $_SESSION['adminId']=$row['id'];
//        header("location:index.php");
        alertMes("登录成功","index.php");
    }else{
        alertMes("登录失败，重新登录","login.php");
    }
}else{
    alertMes("验证码错误","login.php");
}