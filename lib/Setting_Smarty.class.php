<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 17-12-31
 * Time: 上午11:16
 */

define("SMARTY",'/etc/php/smarty-3.1.30/libs/');
require_once SMARTY.'Smarty.class.php';

class Setting_Smarty extends Smarty{
    private $smarty_path="/var/www/html/E-commerce/smarty/";
    function __construct()
    {
        parent::__construct();
        $this->setTemplateDir($this->smarty_path.'templates/');
        $this->setCompileDir($this->smarty_path.'templates_c/');
        $this->setConfigDir($this->smarty_path.'configs/');
        $this->setCacheDir($this->smarty_path.'cache/');

        //如果没有目录则创建(templates,templates_c,configs,cache)
        if (!file_exists($this->getTemplateDir()[0])){
            var_dump(mkdir($this->getTemplateDir()[0],0777,true));
        }
        if (!file_exists($this->getCompileDir())){
            mkdir($this->getCompileDir(),0777,true);
        }
        if (!file_exists($this->getConfigDir()[0])){
            mkdir($this->getConfigDir()[0],0777,true);
        }
        if (!file_exists($this->getCacheDir())){
            mkdir($this->getCacheDir(),0777,true);
        }

        $this->setLeftDelimiter('{#');
        $this->setRightDelimiter('#}');
//        $this->caching=Smarty::CACHING_LIFETIME_CURRENT;
        $this->caching=Smarty::CACHING_OFF;//每次都生成缓存，便于调试
        $this->assign('app_name','ocean');

//        $this->testInstall();
    }
}