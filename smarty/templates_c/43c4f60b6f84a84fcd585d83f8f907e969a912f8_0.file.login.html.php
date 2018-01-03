<?php
/* Smarty version 3.1.30, created on 2018-01-03 21:03:30
  from "/var/www/html/E-commerce/smarty/templates/admin/login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4cd4a294e066_71598807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43c4f60b6f84a84fcd585d83f8f907e969a912f8' => 
    array (
      0 => '/var/www/html/E-commerce/smarty/templates/admin/login.html',
      1 => 1514984505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4cd4a294e066_71598807 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link type="text/css" rel="stylesheet" href="../styles/reset.css">
    <link type="text/css" rel="stylesheet" href="../styles/main.css">
    <!--[if IE 6]>
    <?php echo '<script'; ?>
 type="text/javascript" src="../js/DD_belatedPNG_0.0.8a-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../js/ie6Fixpng.js"><?php echo '</script'; ?>
>
    <![endif]-->
</head>
<body>
<div class="headerBar">
    <div class="logoBar login_logo">
        <div class="comWidth">
            <div class="logo fl">
                <a href="../index.php"><img src="../images/logo.png" alt="后台管理"></a>
            </div>
            <h3 class="welcome_title">后台登录</h3>
        </div>
    </div>
</div>
<div class="loginBox">
    <div class="login_cont">
        <form action="doLogin.php" method="post">
            <ul class="login clearfix">
                <li class="l_tit">管理员帐号</li>
                <li class="mb_10"><input name="username" type="text" class="login_input user_icon"
                                         placeholder="请输入管理员帐号"></li>
                <li class="l_tit">密码</li>
                <li class="mb_10"><input name="password" type="password" class="login_input passwd_icon" placeholder="请输入密码"></li>
                <li class="l_tit">验证码</li>
                <li class="mb_10"><input name="verify" type="text" class="login_input" placeholder="请输入验证码"></li>
                <li><img src="getVerify.php" alt="" id="verify"/>&nbsp;&nbsp;<a href="javascript:void()"
                                                                                onclick="document.getElementById('verify').src='./getVerify.php?'+Math.random()">看不清楚?点击刷新</a>
                </li>
                <li class="autoLogin"><input type="checkbox" id="a1" class="checked" name="autoFlag" value="1"><label for="a1">自动登录(一周内自动登录)</label></li>
                <li><input type="submit" value="" class="login_btn"></li>
            </ul>
        </form>
    </div>
</div>
<div class="hr_25"></div>
<div class="footer">
    <p><a href="">本站简介</a><i>|</i><a href="">本站公告</a><i>|</i><a href="">招贤纳士</a><i>|</i><a href="">联系我们</a><i>|</i>客服热线:888-888-8888
    </p>
    <p>Copyright &copy; 2014-2017 本站版权所有&nbsp;&nbsp;&nbsp;京ICP备09037834号&nbsp;&nbsp;&nbsp;京ICP证B1034-8373号&nbsp;&nbsp;&nbsp;某市公安局XX分局备案编号123456789123</p>
    <p class="web"><a href=""><img src="../images/footer/foot_01.png" alt=""></a><a href=""><img
            src="../images/footer/foot_02.png" alt=""></a><a href=""><img src="../images/footer/foot_03.png"
                                                                          alt=""></a><a
            href=""><img src="../images/footer/foot_04.png" alt=""></a></p>
</div>
</body>
</html><?php }
}
