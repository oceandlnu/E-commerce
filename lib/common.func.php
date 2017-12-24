<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 17-12-23
 * Time: 上午9:52
 */
function alertMes($mes,$url){
    echo "<script>alert('{$mes}')</script>";
    echo "<script>window.location='{$url}';</script>";
}