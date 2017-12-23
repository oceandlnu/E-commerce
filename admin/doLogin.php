<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 17-12-23
 * Time: 下午1:29
 */
require_once '../include.php';
//session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$verify = $_POST['verify'];
$verify_1 = $_SESSION['verify'];
if ($verify == $verify_1){
    ;
}else{
    echo "<script>alert('验证码错误')</script>";
    echo "<script>window.location='login.php';</script>";
}