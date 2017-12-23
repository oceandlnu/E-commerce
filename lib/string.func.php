<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 17-12-23
 * Time: 上午9:51
 */
function buildRandomString($type = 1, $length = 4)
{
    $chars="";
    if ($type == 1) {//纯数字验证码
        $chars = join("", range(0, 9));
    } elseif ($type == 2) {//纯字母验证码
        $chars = join("", array_merge(range("a", "z"), range("A", "Z")));
    } elseif ($type == 3) {//数字+字母验证码
        $chars = join("", array_merge(range("a", "z"), range("A", "Z"), range(0, 9)));
    }
    if ($length > strlen($chars)) {
        exit("字符串长度不够");
    }
    $chars = str_shuffle($chars);//随机打乱字符串
    return substr($chars, 0, $length);//字符串截取,从0开始，长度为length
}