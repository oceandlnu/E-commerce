<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 17-12-25
 * Time: 下午5:28
 */
/**
 * 添加分类操作
 * @return string
 */
function addCate()
{
    $arr = $_POST;
    $table = "shop_cate";
    if ($GLOBALS['mysql']->insert($table, $arr)) {
        $mes = "添加成功<br/><a href='addCate.php'>继续添加</a>|<a href='listCate.php'>查看分类</a>";
    } else {
        $mes = "添加失败<br/><a href='addCate.php'>重新添加</a>|<a href='listCate.php'>查看分类</a>";
    }
    return $mes;
}

/**
 * 根据id得到指定分类信息
 * @param $id
 * @return mixed
 */
function getCateById($id)
{
    $table = "shop_cate";
    $sql = "select id,cName from {$table} where id='{$id}'";
    return $GLOBALS['mysql']->fetchOne($sql);
}

/**
 * 编辑分类
 * @param $id
 * @return string
 */
function editCate($id)
{
    $arr = $_POST;
    $table = "shop_cate";
    $where = "id={$id}";
    if ($GLOBALS['mysql']->update($table, $arr, $where)) {
        $mes = "修改成功<a href='listCate.php'>&nbsp;|&nbsp;查看分类</a>";
    } else {
        $mes = "修改失败<a href='listCate.php'>&nbsp;|&nbsp;重新修改</a>";
    }
    return $mes;
}

/**
 * 删除分类
 * @param $id
 * @return string
 */
function delCate($id)
{
    $res=checkProExist($id);
    if (!$res){
        $table = "shop_cate";
        $where="id={$id}";
        if ($GLOBALS['mysql']->delete($table, $where)) {
            $mes = "删除成功<a href='listCate.php'>&nbsp;|&nbsp;查看分类</a>";
        } else {
            $mes = "删除失败！<a href='listCate.php'>&nbsp;|&nbsp;重新删除</a>";
        }
        return $mes;
    }else{
        alertMes("不能删除分类，请先删除该分类下的商品","listPro.php");
    }
}

/**
 * 得到所有分类
 * @return array
 */
function getAllCate()
{
    $table = "shop_cate";
    $sql = "select id,cName from {$table}";
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
function getCateByPage($page, $pageSize = 2, $totalPage)
{
    if ($page < 1 || $page == null || !is_numeric($page)) {
        $page = 1;
    }
    if ($page >= $totalPage) {
        $page = $totalPage;
    }
    $offset = ($page - 1) * $pageSize;
    $table = "shop_cate";
    $sql = "select id,cName from {$table} order by id asc limit {$offset},{$pageSize}";
    $rows = $GLOBALS['mysql']->fetchAll($sql);
    return $rows;
}