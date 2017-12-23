<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link type="text/css" rel="stylesheet" href="../css/reset.css">
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <!--[if IE 6]>
    <script type="text/javascript" src="../js/DD_belatedPNG_0.0.8a-min.js"></script>
    <script type="text/javascript" src="../js/ie6Fixpng.js"></script>
    <![endif]-->
</head>
<body>
<div class="headerBar">
    <div class="logoBar login_logo">
        <div class="comWidth">
            <div class="logo fl">
                <a href="#"><img src="../images/logo.png" alt="慕课网"></a>
            </div>
            <h3 class="welcome_title">欢迎登录</h3>
        </div>
    </div>
</div>
<div class="loginBox">
    <div class="login_cont">
        <form action="doLogin.php" method="post">
        <ul class="login clearfix">
            <li class="l_tit">管理员帐号</li>
            <li class="mb_10"><input type="text" class="login_input user_icon" placeholder="请输入管理员帐号"></li>
            <li class="l_tit">密码</li>
            <li class="mb_10"><input type="text" class="login_input passwd_icon"></li>
            <li class="l_tit">验证码</li>
            <li class="mb_10"><input type="text" class="login_input"></li>
            <li><img src="getVerify.php" alt="" /></li>
            <li class="autoLogin"><input type="checkbox" id="a1" class="checked"><label for="a1">自动登录</label></li>
            <li><input type="button" value="" class="login_btn"></li>
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
                src="../images/footer/foot_02.png" alt=""></a><a href=""><img src="../images/footer/foot_03.png" alt=""></a><a
            href=""><img src="../images/footer/foot_04.png" alt=""></a></p>
</div>
</body>
</html>