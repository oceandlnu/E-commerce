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
function checkAdmin($sql)
{
    $mysql = new mysql();
    return $mysql->fetchOne($sql);
}

/**
 * 检测是否有管理员存在
 */
function checkLogined()
{
    if ($_SESSION['adminId'] == "" && $_COOKIE['adminId'] == "") {
        alertMes("请先登录", "login.php");
    }
}

function addAdmin(){
    $arr=$_POST;
    $arr['password']=md5($_POST['password']);
    $mysql = new mysql();
    if ($mysql->insert("shop_admin",$arr)){
        $mes="添加成功<br/><a href='addAdmin.php'>继续添加</a>|<a href='listAdmin.php'>查看管理员列表</a>";
    }else{
        $mes="添加失败<br/><a href='addAdmin.php'>重新添加</a>";
    }
    return $mes;
}

/**
 * 注销管理员
 */
function logout()
{
    $_SESSION = array();
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), "", time() - 1);
    }
    if (isset($_COOKIE['adminId'])){
        setcookie('adminId',"".time()-1);
    }
    if (isset($_COOKIE['adminName'])){
        setcookie('adminName',"",time()-1);
    }
    session_destroy();
    header("location:login.php");
}