<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 17-12-26
 * Time: 下午5:08
 */

/**
 * 添加商品
 * @return string
 */
function addPro()
{
    $arr = $_POST;
    $arr['pubTime'] = time();
    $path = "../images/uploads";
    $table = "shop_pro";
    $mysql = new mysql();
    if ($res=$mysql->insert($table, $arr)) {
        $pid = $res['lastId'];
        $uploadFiles = uploadFile($path);
        if (is_array($uploadFiles) && $uploadFiles) {
            foreach ($uploadFiles as $key => $uploadFile) {
                thumb($path . "/" . $uploadFile['name'], $path . "/image_50/" . $uploadFile['name'], 50, 50, true);
                thumb($path . "/" . $uploadFile['name'], $path . "/image_220/" . $uploadFile['name'], 220, 220, true);
                thumb($path . "/" . $uploadFile['name'], $path . "/image_350/" . $uploadFile['name'], 350, 350, true);
                thumb($path . "/" . $uploadFile['name'], $path . "/image_800/" . $uploadFile['name'], 800, 800, true);
            }
        }
        foreach ($uploadFiles as $uploadFile) {
            $arr1['pid'] = $pid;
            $arr1['albumPath'] = $uploadFile['name'];
            addAlbum($arr1);
        }
        $mes = "添加成功<br/><a href='addPro.php' target='mainFrame'>继续添加</a>|<a href='listPro.php'>查看商品列表</a>";
    } else {
        $mes = "添加失败<br/><a href='addPro.php' target='mainFrame'>重新添加</a>|<a href='listPro.php'>查看商品列表</a>";
    }
    return $mes;
}