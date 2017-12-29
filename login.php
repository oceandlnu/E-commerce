<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link type="text/css" rel="stylesheet" href="styles/reset.css">
    <link type="text/css" rel="stylesheet" href="styles/main.css">
    <!--[if IE 6]>
    <script type="text/javascript" src="js/DD_belatedPNG_0.0.8a-min.js"></script>
    <script type="text/javascript" src="js/ie6Fixpng.js"></script>
    <![endif]-->
</head>
<body>
<div class="headerBar">
    <div class="logoBar login_logo">
        <div class="comWidth">
            <div class="logo fl">
                <a href="index.php"><img src="images/logo.png" alt="电商网站"></a>
            </div>
            <h3 class="welcome_title">欢迎登录</h3>
        </div>
    </div>
</div>
<div class="loginBox">
    <div class="login_cont">
        <form action="doAction.php?act=login" method="post">
        <ul class="login clearfix">
            <li class="l_tit">邮箱/用户名/手机号</li>
            <li class="mb_10"><input type="text" class="login_input user_icon" name="username" placeholder="请输入用户名"></li>
            <li class="l_tit">密码</li>
            <li class="mb_10"><input type="password" class="login_input passwd_icon" name="password" placeholder="请输入密码"></li>
            <li class="autoLogin fl"><input type="checkbox" id="a1" class="checked"><label for="a1">自动登录</label></li>
            <li class="controlsLogin fl"><input type="checkbox" id="a2" class="checked"><label for="a2">安全控件登录</label></li>
            <li class="forgetPasswd"><a href="#">忘记密码?</a></li>
            <li><input type="submit" value="" class="login_btn"></li>
        </ul>
        </form>
        <div class="login_partners">
            <p class="l_tit">使用合作方帐号登录网站：</p>
            <ul class="login_list clearfix">
                <li><a href="">QQ</a></li>
                <li><span>|</span></li>
                <li><a href="">网易</a></li>
                <li><span>|</span></li>
                <li><a href="">人人</a></li>
                <li><span>|</span></li>
                <li><a href="">奇虎360</a></li>
                <li><span>|</span></li>
                <li><a href="">开心</a></li>
                <li><span>|</span></li>
                <li><a href="">豆瓣</a></li>
                <li><span>|</span></li>
                <li><a href="">搜狐</a></li>
                <li><span>|</span></li>
                <li><a href="">更多&gt;&gt;</a></li>
            </ul>
        </div>
    </div>
    <a href="reg.php" class="reg_link"></a>
</div>
<div class="hr_25"></div>
<div class="footer">
    <p><a href="">本站简介</a><i>|</i><a href="">本站公告</a><i>|</i><a href="">招贤纳士</a><i>|</i><a href="">联系我们</a><i>|</i>客服热线:888-888-8888
    </p>
    <p>Copyright &copy; 2014-2017 本站版权所有&nbsp;&nbsp;&nbsp;京ICP备09037834号&nbsp;&nbsp;&nbsp;京ICP证B1034-8373号&nbsp;&nbsp;&nbsp;某市公安局XX分局备案编号123456789123</p>
    <p class="web"><a href=""><img src="images/footer/foot_01.png" alt=""></a><a href=""><img
            src="images/footer/foot_02.png" alt=""></a><a href=""><img src="images/footer/foot_03.png" alt=""></a><a
            href=""><img src="images/footer/foot_04.png" alt=""></a></p>
</div>
</body>
</html>