<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 17-12-26
 * Time: 下午5:44
 */

function addAlbum($arr){
    $table = "shop_album";
    $mysql = new mysql();
    if ($mysql->insert($table, $arr)) {
        $mes = "添加成功<br/><a href='addAlbum.php'>继续添加</a>|<a href='listAlbum.php'>查看</a>";
    } else {
        $mes = "添加失败<br/><a href='addAlbum.php'>重新添加</a>|<a href='listAlbum.php'>查看</a>";
    }
    return $mes;
}