<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 17-12-24
 * Time: 上午11:49
 */
require_once '../include.php';
$act=$_REQUEST['act'];
if ($act == "logout"){
    logout();
}