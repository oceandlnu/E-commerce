<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 17-12-23
 * Time: 下午1:29
 */
require_once '../include.php';
$username = $_POST['username'];
$username = addslashes($username);//防止SQL注入
$password = md5($_POST['password']);
$verify = $_POST['verify'];
$verify_1 = $_SESSION['verify'];
$autoFlag = !empty($_POST['autoFlag']) ? $_POST['autoFlag'] : null;
if ($verify == $verify_1) {
    $sql = "select * from shop_admin where username='{$username}' and password='{$password}'";
    $row = checkAdmin($sql);
    if ($row) {
        //如果选了一周内自动登录
        if ($autoFlag) {
            setcookie('adminId', $row['id'], time() + 7 * 24 * 3600);
            setcookie('adminName', $row['username'], time() + 7 * 24 * 3600);
        }
        $_SESSION['adminName'] = $row['username'];
        $_SESSION['adminId'] = $row['id'];
//        header("location:index.php");
        alertMes("登录成功", "index.php");
    } else {
        alertMes("登录失败，重新登录", "login.php");
    }
} else {
    alertMes("验证码错误", "login.php");
}