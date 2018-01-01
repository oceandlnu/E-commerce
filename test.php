<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 17-12-30
 * Time: 下午3:53
 */
require_once 'include.php';
$smarty=new Setting_Smarty();
//$smarty->testInstall();
$smarty->assign('hello',"Hello World");
$smarty->display('index.html');