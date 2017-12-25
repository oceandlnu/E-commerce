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

/**
 * 添加管理员
 * @return string
 */
function addAdmin()
{
    $arr = $_POST;
    $arr['password'] = md5($_POST['password']);
    $mysql = new mysql();
    if ($mysql->insert("shop_admin", $arr)) {
        $mes = "添加成功<br/><a href='addAdmin.php'>继续添加</a>|<a href='listAdmin.php'>查看管理员列表</a>";
    } else {
        $mes = "添加失败<br/><a href='addAdmin.php'>重新添加</a>";
    }
    return $mes;
}

/**
 * 得到所有管理员
 * @return array
 */
function getAllAdmin()
{
    $sql = "select id,username,password,email from shop_admin";
    $mysql = new mysql();
    $row = $mysql->fetchAll($sql);
    return $row;
}

function getAdminByPage($page, $pageSize = 2)
{
    $sql = "select id from shop_admin";
    $mysql = new mysql();
    $totalRows = $mysql->getResultNum($sql);
    //得到总页码数
    global $totalPage;
    $totalPage = ceil($totalRows / $pageSize);
    if ($page < 1 || $page == null || !is_numeric($page)) {
        $page = 1;
    }
    if ($page >= $totalPage) {
        $page = $totalPage;
    }
    $offset = ($page - 1) * $pageSize;
    $sql = "select id,username,email from shop_admin limit {$offset},{$pageSize}";
    $rows = $mysql->fetchAll($sql);
    return $rows;
}

/**
 * 编辑管理员
 * @param $id
 * @return string
 */
function editAdmin($id)
{
    $arr = $_POST;
    $arr['password'] = md5($_POST['password']);
    $table = "shop_admin";
    $mysql = new mysql();
    if ($mysql->update($table, $arr, "id={$id}")) {
        $mes = "编辑成功<a href='listAdmin.php'>&nbsp;|&nbsp;查看管理员列表</a>";
    } else {
        $mes = "编辑失败！<a href='listAdmin.php'>&nbsp;|&nbsp;请重新修改</a>";
    }
    return $mes;
}

/**
 * 删除管理员
 * @param $id
 * @return string
 */
function delAdmin($id)
{
    $table = "shop_admin";
    $mysql = new mysql();
    if ($mysql->delete($table, "id={$id}")) {
        $mes = "删除成功<a href='listAdmin.php'>&nbsp;|&nbsp;查看管理员列表</a>";
    } else {
        $mes = "删除失败！<a href='listAdmin.php'>&nbsp;|&nbsp;请重新删除</a>";
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
    if (isset($_COOKIE['adminId'])) {
        setcookie('adminId', "" . time() - 1);
    }
    if (isset($_COOKIE['adminName'])) {
        setcookie('adminName', "", time() - 1);
    }
    session_destroy();
    header("location:login.php");
}