<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 17-12-26
 * Time: 下午5:44
 */

function addAlbum($arr)
{
    $table = "shop_album";
    if ($GLOBALS['mysql']->insert($table, $arr)) {
        $mes = "添加成功<br/><a href='addAlbum.php'>继续添加</a>|<a href='listAlbum.php'>查看</a>";
    } else {
        $mes = "添加失败<br/><a href='addAlbum.php'>重新添加</a>|<a href='listAlbum.php'>查看</a>";
    }
    return $mes;
}

/**
 * 根据商品id得到第一张商品图片
 * @param $id
 * @return mixed
 */
function getProImgById($id)
{
    $table = "shop_album";
    $sql = "select albumPath from {$table} where pid={$id} limit 1";
    $row = $GLOBALS['mysql']->fetchOne($sql);
    return $row;
}

/**
 * 得到所有图片
 * @param $id
 * @return mixed
 */
function getProImgsById($id)
{
    $table = "shop_album";
    $sql = "select albumPath from {$table} where pid={$id}";
    $row = $GLOBALS['mysql']->fetchAll($sql);
    return $row;
}

/**
 * 添加文字水印
 * @param $id
 * @return string
 */
function doWaterText($id){
    $rows=getProImgsById($id);
    foreach ($rows as $row){
        $filename="../images/uploads/image_800/".$row['albumPath'];
        waterText($filename);
    }
    $mes="操作成功";
    return $mes;
}

/**
 * 添加图片水印
 * @param $id
 * @return string
 */
function doWaterPic($id){
    $rows=getProImgsById($id);
    foreach ($rows as $row){
        $filename="../images/uploads/image_800/".$row['albumPath'];
        waterPic($filename);
    }
    $mes="操作成功";
    return $mes;
}