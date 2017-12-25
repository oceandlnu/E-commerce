<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 17-12-23
 * Time: 上午9:52
 */
function showPage($page,$totalPage,$where=null,$sep="&nbsp;"){
    $whereCon=($where==null)?null:"&".$where;
    $url=$_SERVER['PHP_SELF'];
    $index=($page==1)?"首页":"<a href='{$url}?page=1{$whereCon}'>首页</a>";
    $last=($page==$totalPage)?"尾页":"<a href='{$url}?page={$totalPage}{$whereCon}'>尾页</a>";
    $prev=($page==1)?"上一页":"<a href='{$url}?page=".($page-1)."{$whereCon}'>上一页</a>";
    $next=($page==$totalPage)?"下一页":"<a href='{$url}?page=".($page+1)."{$whereCon}'>下一页</a>";
    $str="总共{$totalPage}页/当前是第{$page}页";
    $p="";
    for ($i=1;$i<=$totalPage;$i++){
        //当前页面无链接
        if ($page==$i){
            $p.="[{$i}]";
        }else{
            $p.="<a href='{$url}?page={$i}'>[{$i}]</a>";
        }
    }
    $pageStr=$str.$sep.$index.$sep.$prev.$sep.$p.$sep.$next.$sep.$last;
    return $pageStr;
}