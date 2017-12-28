<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 17-12-28
 * Time: 下午7:51
 */

/**
 * 用户注册界面
 * @return string
 */
function reg()
{
    $arr = $_POST;
    if ($arr['password'] !== $arr['confirmPwd']) {
        alertMes("两次输入密码不一致，请重新输入", "addUser.php");
        exit;
    }
    unset($arr['confirmPwd']);
    $arr['password'] = md5($_POST['password']);
    $arr['regTime'] = time();
    $facePath = "images/userFaces";
    $table = "shop_user";
    $uploadFile = uploadFile($facePath);
    if (!empty($uploadFile)) {
        $arr['face'] = $uploadFile[0]['name'];
    } else {
        return "注册失败";
    }
    if ($GLOBALS['mysql']->insert($table, $arr)) {
        $mes = "注册成功!<br/>3秒钟后跳转到登陆页面!<meta http-equiv='refresh' content='3;url=login.php'/>";
    } else {
        $filename = $facePath . "/" . $uploadFile[0]['name'];
        if (file_exists($filename)) {
            unlink($filename);
        }
        $mes = "注册失败!<br/><a href='reg.php'>重新注册</a>|<a href='index.php'>查看首页</a>";
    }
    return $mes;
}

/**
 * 用户登录界面
 * @return string
 */
function login()
{
    $table = "shop_user";
    $username = $_POST['username'];
    //addslashes():使用反斜线引用特殊字符
    //$username=addslashes($username);
//    $username = mysql_escape_string($username);
    $password = md5($_POST['password']);
    $sql = "select * from {$table} where username='{$username}' and password='{$password}'";
    //$resNum=getResultNum($sql);
    $row = $GLOBALS['mysql']->fetchOne($sql);
    //echo $resNum;
    if ($row) {
        $_SESSION['loginFlag'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $mes = "登陆成功！<br/>3秒钟后跳转到首页<meta http-equiv='refresh' content='3;url=index.php'/>";
    } else {
        $mes = "登陆失败！<a href='login.php'>重新登陆</a>";
    }
    return $mes;
}

/**
 * 用户退出
 */
function userOut()
{
    $_SESSION = array();
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), "", time() - 1);
    }
    session_destroy();
    header("location:index.php");
}