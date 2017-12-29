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
    return $GLOBALS['mysql']->fetchOne($sql);
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
    $table = "shop_admin";
    $arr['password'] = md5($_POST['password']);
    if ($GLOBALS['mysql']->insert($table, $arr)) {
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
    $table = "shop_admin";
    $sql = "select id,username,password,email from {$table}";
    $row = $GLOBALS['mysql']->fetchAll($sql);
    return $row;
}

/**
 * 分页显示
 * @param $page
 * @param int $pageSize
 * @param $totalPage
 * @return array
 */

function getAdminByPage($page, $pageSize = 2, $totalPage)
{
    if ($page < 1 || $page == null || !is_numeric($page)) {
        $page = 1;
    }
    if ($page >= $totalPage) {
        $page = $totalPage;
    }
    $offset = ($page - 1) * $pageSize;
    $table = "shop_admin";
    $sql = "select id,username,email from {$table} limit {$offset},{$pageSize}";
    $rows = $GLOBALS['mysql']->fetchAll($sql);
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
    if ($GLOBALS['mysql']->update($table, $arr, "id={$id}")) {
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
    if ($GLOBALS['mysql']->delete($table, "id={$id}")) {
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

/**
 * 添加用户
 * @return string
 */
function addUser()
{
    $arr = $_POST;
    if ($arr['password'] !== $arr['confirmPwd']) {
        alertMes("两次输入密码不一致，请重新输入", "addUser.php");
        exit;
    }
    $facePath = "../images/userFaces";
    $table = "shop_user";
    unset($arr['confirmPwd']);
    $arr['password'] = md5($_POST['password']);
    $arr['regTime'] = time();
    $uploadFile = uploadFile($facePath);
    if (!empty($uploadFile)) {
        $arr['face'] = $uploadFile[0]['name'];
    } else {
        return "添加失败，请添加头像<br/><a href='addUser.php'>重新添加</a>|<a href='listUser.php'>查看列表</a>";
    }
    if ($GLOBALS['mysql']->insert($table, $arr)) {
        $mes = "添加成功!<br/><a href='addUser.php'>继续添加</a>|<a href='listUser.php'>查看列表</a>";
    } else {
        $filename = $facePath . "/" . $uploadFile[0]['name'];
        if (file_exists($filename)) {
            unlink($filename);
        }
        $mes = "添加失败!<br/><a href='addUser.php'>重新添加</a>|<a href='listUser.php'>查看列表</a>";
    }
    return $mes;
}

/**
 * 编辑用户
 * @param $id
 * @return string
 */
function editUser($id)
{
    $arr = $_POST;
    $arr['password'] = md5($_POST['password']);
    $table = "shop_user";
    if ($GLOBALS['mysql']->update($table, $arr, "id={$id}")) {
        $mes = "编辑成功<a href='listUser.php'>&nbsp;|&nbsp;查看列表</a>";
    } else {
        $mes = "编辑失败！<a href='listUser.php'>&nbsp;|&nbsp;重新修改</a>";
    }
    return $mes;
}

/**
 * 删除用户
 * @param $id
 * @return string
 */
function delUser($id)
{
    $table = "shop_user";
    $sql="select face from {$table} where id={$id}";
    $row=$GLOBALS['mysql']->fetchOne($sql);
    $facePath = "../images/userFaces";
    if (!empty($row) && file_exists($facePath."/".$row['face'])){
        unlink($facePath."/".$row['face']);
    }
    if ($GLOBALS['mysql']->delete($table, "id={$id}")) {
        $mes = "删除成功<a href='listUser.php'>&nbsp;|&nbsp;查看列表</a>";
    } else {
        $mes = "删除失败！<a href='listUser.php'>&nbsp;|&nbsp;重新删除</a>";
    }
    return $mes;
}