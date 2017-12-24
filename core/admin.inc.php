<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 17-12-23
 * Time: 下午11:21
 */
/**
 * 检查管理员是否存在
 * @param $sql
 * @return mixed
 */
function checkAdmin($sql){
    $mysql=new mysql();
    return $mysql->fetchOne($sql);
}

/**
 * 检测是否有管理员存在
 */
function checkLogined(){
    if ($_SESSION['adminId']==""){
        alertMes("请先登录","login.php");
    }
}

/**
 * 注销管理员
 */
function logout(){
    $_SESSION=array();
    if (isset($_COOKIE[session_name()])){
        setcookie(session_name(),"",time()-1);
    }
    session_destroy();
    header("location:login.php");
}