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
    if ($GLOBALS['mysql']->insert($table, $arr)) {
        $pid = $GLOBALS['mysql']->getInsertId();
        $uploadFiles = uploadFile($path);
//        var_dump($pid);
        if (is_array($uploadFiles) && $uploadFiles) {
            foreach ($uploadFiles as $key => $uploadFile) {
                thumb($path . "/" . $uploadFile['name'], $path . "/image_50/" . $uploadFile['name'], 50, 50, true);
                thumb($path . "/" . $uploadFile['name'], $path . "/image_220/" . $uploadFile['name'], 220, 220, true);
                thumb($path . "/" . $uploadFile['name'], $path . "/image_350/" . $uploadFile['name'], 350, 350, true);
                thumb($path . "/" . $uploadFile['name'], $path . "/image_800/" . $uploadFile['name'], 800, 800, true);
            }
            foreach ($uploadFiles as $uploadFile) {
                $arr1['pid'] = $pid;
                $arr1['albumPath'] = $uploadFile['name'];
                addAlbum($arr1);
            }
        }
        $mes = "添加成功<br/><a href='addPro.php' target='mainFrame'>继续添加</a>|<a href='listPro.php'>查看商品列表</a>";
    } else {
        $mes = "添加失败<br/><a href='addPro.php' target='mainFrame'>重新添加</a>|<a href='listPro.php'>查看商品列表</a>";
    }
    return $mes;
}

function editPro($id)
{
    $arr = $_POST;
//    $arr['pubTime'] = time();
    $path = "../images/uploads";
    $table = "shop_pro";
    $where = "id={$id}";
    if ($GLOBALS['mysql']->update($table, $arr, $where)) {
        $uploadFiles = uploadFile($path);
        $pid = $id;
//        var_dump($pid);
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
        $mes = "修改成功<br/><a href='listPro.php' target='mainFrame'>查看列表</a>";
    } else {
        $mes = "修改失败<br/><a href='editPro.php?id={$id}' target='mainFrame'>重新编辑</a>|<a href='listPro.php'>查看列表</a>";
    }
    return $mes;
}

function delPro($id)
{
    $where="id={$id}";
    $table="shop_pro";
    $res=$GLOBALS['mysql']->delete($table,$where);
    $proImgs=getImgByProId($id);
    $path="../images/uploads/";
    if (!empty($proImgs)){
        foreach ($proImgs as $proImg){
            if (file_exists($path.$proImg['albumPath'])){
                unlink($path.$proImg['albumPath']);
            }
            if (file_exists($path."image_50/".$proImg['albumPath'])){
                unlink($path."image_50/".$proImg['albumPath']);
            }
            if (file_exists($path."image_220/".$proImg['albumPath'])){
                unlink($path."image_220/".$proImg['albumPath']);
            }
            if (file_exists($path."image_350/".$proImg['albumPath'])){
                unlink($path."image_350/".$proImg['albumPath']);
            }
            if (file_exists($path."image_800/".$proImg['albumPath'])){
                unlink($path."image_800/".$proImg['albumPath']);
            }
        }
    }
    $table1="shop_album";
    $where1="pid={$id}";
    $res1=$GLOBALS['mysql']->delete($table1,$where1);
    if ($res&&$res1){
        $mes = "删除成功<br/><a href='listPro.php' target='mainFrame'>查看列表</a>";
    }else {
        $mes = "删除失败<br/><a href='listPro.php' target='mainFrame'>重新删除</a>";
    }
    return $mes;
}

/**
 * 得到所有商品信息
 * @return mixed
 */
function getAllPro()
{
    $table = "shop_pro";
    $sql = "select p.id,p.pName,p.pSn,p.pNum,p.mPrice,p.iPrice,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName from {$table} as p join shop_cate as c on p.cId=c.id";
    $rows = $GLOBALS['mysql']->fetchAll($sql);
    return $rows;
}

/**
 * 分页显示
 * @param $page
 * @param int $pageSize
 * @param $totalPage
 * @return mixed
 */
function getProByPage($page, $pageSize = 2, $totalPage,$where=null,$orderBy=null)
{
    if ($page < 1 || $page == null || !is_numeric($page)) {
        $page = 1;
    }
    if ($page >= $totalPage) {
        $page = $totalPage;
    }
    $offset = ($page - 1) * $pageSize;
    $table = "shop_pro";
    $sql = "select p.id,p.pName,p.pSn,p.pNum,p.mPrice,p.iPrice,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName from shop_pro as p join shop_cate as c on p.cId=c.id {$where} {$orderBy} limit {$offset},{$pageSize}";
    $rows = $GLOBALS['mysql']->fetchAll($sql);
    return $rows;
}

/**
 * 得到商品图片路径
 * @param $id
 * @return mixed
 */
function getImgByProId($id)
{
    $sql = "select a.albumPath from shop_album as a where a.pid={$id}";
    $rows = $GLOBALS['mysql']->fetchAll($sql);
    return $rows;
}

/**
 * 根据id得到商品的详细信息
 * @param $id
 * @return mixed
 */
function getProById($id)
{
    $table = "shop_pro";
    $sql = "select p.id,p.pName,p.pSn,p.pNum,p.mPrice,p.iPrice,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName,p.cId from {$table} as p join shop_cate as c on p.cId=c.id where p.id={$id}";
    return $GLOBALS['mysql']->fetchOne($sql);
}

/**
 * 根据cid得到4条产品
 * @param $cId
 * @return mixed
 */
function getProBycId($cId)
{
    $table = "shop_pro";
    $sql = "select p.id,p.pName,p.pSn,p.pNum,p.mPrice,p.iPrice,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName,p.cId from {$table} as p join shop_cate as c on p.cId=c.id where p.cId={$cId} limit 4";
    return $GLOBALS['mysql']->fetchAll($sql);
}

/**
 * 根据cid得到下4条产品
 * @param $cId
 * @return mixed
 */
function getSmallProBycId($cId){
    $table = "shop_pro";
    $sql = "select p.id,p.pName,p.pSn,p.pNum,p.mPrice,p.iPrice,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName,p.cId from {$table} as p join shop_cate as c on p.cId=c.id where p.cId={$cId} limit 4,4";
    return $GLOBALS['mysql']->fetchAll($sql);
}

/**
 * 检查分类下是否有产品
 * @param $cId
 * @return mixed
 */
function checkProExist($cId){
    $table="shop_pro";
    $sql="select * from {$table} where cId={$cId}";
    $rows=$GLOBALS['mysql']->fetchAll($sql);
    return $rows;
}